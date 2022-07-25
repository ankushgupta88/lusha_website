<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserPlan;
use App\Models\User;
use App\Models\Order;
use App\Models\Plan;
use Stripe\Charge;
use Stripe\Stripe;

class PlanCheckoutController extends Controller
{
    public function checkout($id){
    	$user_id = Auth::id();
    	$plan_data = Plan::Where('id',$id)->get();
    	$current_plan = UserPlan::Where('user_id',$user_id)->get();
    	return view('customer.checkout.checkout',compact('plan_data','current_plan'));
    }

	public function payStripe(Request $request)
	{  
		$user_id = Auth::id();
	
		//Get request
        $amount = $request->input('amount');
        $name = $request->input('company_name');
        $company_name = $request->input('company_name');
        $email = $request->input('email');
        $billing_address = $request->input('address');
        $city = $request->input('city');
        $postal_code = $request->input('postal_code');
        $country = $request->input('country');

        $plan_id = $request->input('plan_id');
        $plan_name = $request->input('plan_name');
        $credit = $request->input('credit');

		//Check payent method here
		if($request->payment_method == "Stripe") {
			try {
			   
			    if($amount > 0){
				$stripe = new \Stripe\StripeClient('sk_test_51K9UGESERrOeVWpndsFtRSLgXhNT8aLtSqZdDfO1xnnwLZgdkqVeNX88oyBPcJz2oknuAQ1OeJfFeIpHYlSxZBOK008nYHqIJi');
				$token_data = $stripe->tokens->create([
				  'card' => [
				    'number' => $request->card_number,
				    'exp_month' => $request->card_month,
				    'exp_year' => $request->card_exp_year,
				    'cvc' => $request->card_cvv,
				  ],
				]);
}
			//Check crd is valid or not
			if(!empty($token_data)|| empty($token_data) ){ 
				//token
				if($amount > 0){
				$stripetoken = $token_data->id; 

		        Stripe::setApiKey('sk_test_51K9UGESERrOeVWpndsFtRSLgXhNT8aLtSqZdDfO1xnnwLZgdkqVeNX88oyBPcJz2oknuAQ1OeJfFeIpHYlSxZBOK008nYHqIJi');
		        $charge = new Charge();
		        $cardDetailsAry = array([
		            'amount' => $amount * 100,
		            'currency' => 'inr',
		            'source' => $stripetoken,
		            'shipping' => [
		                'name' => $name,
		                'address' => [
		                    'line1' => $billing_address,
		                    'line2' => $company_name,
		                    'city' => $city,
		                    'postal_code' => $postal_code,
		                    'country' => $country,
		                ],
		            ],
		        ]);
		        $result = $charge->create($cardDetailsAry);
				}
		        // echo "<pre>";
		       	// print_r($result);
		        //Check if payment is done or not
		        if(!empty($result)){
		            
		             $status = $result['status'];
		        }else{
		            $status = "succeeded";
		        }
		        
		        if($status == "succeeded"){
		        	$transationId = !empty($result['id'])?$result['id']:0;
		        	// user plan update 
			       $update = UserPlan::where('user_id', $user_id)
		                			 ->update([
					                    'plan_id' => $plan_id,
					                    'plane_name' => $plan_name,
					                    'credits' => $credit,
					                ]);
		            // order create 
		            $order = Order::create([
		                    'transactionId'    =>  $transationId,
		                    'amount' =>  $amount,
		                    'user_id'      =>  $user_id,
		                    'plan_id'    =>  $plan_id,
		                    'billing_name' => $company_name,
		                    'billing_email'       =>  $email,
		                    'billing_address' =>  $billing_address,
		                    'billing_city' =>  $city,
		                    'billing_zipcode' =>  $postal_code,
		                    'billing_country' =>  $country,
		                ]);

		            //Checl order is create or not
		            if($order){
		            	echo "<p class='success-msg'>Order is created successfully.</p>";
		         ?>
		         		<script>
		         			window.setTimeout(function(){
		                    window.location.href = base_url + "/dashboard";
		                  }, 3000);
		         		</script>
		         <?php

		            } else {
		            	echo "<p class='unsuccess-msg'>Opps something wrong.</p>";
		            }
		        } else {
		        	echo "<p class='unsuccess-msg'>Opps something wrong.</p>";
		        }
			} else {
				echo "<p class='unsuccess-msg'>Your card deatail is incorrect.</p>";
			}
		} catch(\Stripe\Exception\CardException $e) {
		  echo "<p class='unsuccess-msg'>".$e->getError()->message."</p>";
		}
		} elseif($request->payment_method == "Paypal"){
			echo "paypal code here";
		} else {
			echo "<p class='unsuccess-msg'>Please Select Payment Method.</p>";
		}
	}
}
