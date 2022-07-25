<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserPlan;
use App\Models\User;
use App\Models\Order;
use App\Models\Plan;
use Stripe\Charge;
use Stripe\Stripe;

class OrderController extends Controller
{
	public function all_order(){
	   $all_order = Order::with('order_user_list','order_user_plan_list')->get();
	   return view('admin.order.all_order',compact('all_order'));
	}

	//Order receipt 
    public function order_receipt($id)
    {
    	$receipt = Order::Where('id',$id)->with('order_user_list','order_user_plan_list')->get();
    	// echo '<pre>';
    	// print_r($receipt);die;
        return view('admin.order.invoice_receipt',compact('receipt'));
    }
}
