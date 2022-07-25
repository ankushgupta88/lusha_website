<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserPlan;
use App\Models\Order;
use App\Models\User;
use App\Models\Plan;
use App\Models\CusList;
use App\Models\ProspectingList;
use Mail;
use App\Mail\account_reset_password;
use Config;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\History;
use App\Models\SaveHistory;

use Carbon\CarbonImmutable;

class CustomerController extends Controller
{
	public function dashboard()
    {
        $user_id = Auth::id();
        $plan_id[] = '';
        $user_plans = UserPlan::Where("user_id", $user_id)->get();
        foreach ($user_plans as $key => $value) {
            $plan_id = $value->plan_id;
        }
        $plans = Plan::Where("id", $plan_id)->get();
        return view('customer.dashboard',compact('user_plans','plans'));
    }
    
 

    /*public function prospecting(Request $request)
    { 
       $page = !empty($_REQUEST['page'])?$_REQUEST['page']:1;
     
       $api_secret = env('API_SECRET'); 
       
       $api_url = env('API_URL'); 

        $url =  $api_url.''."fetchAll";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
     
        $data = array(
            "api_secret" => $api_secret,
            "page" => $page,
            "limit" => 200,
            "order" => "ASC",
            "hasMore"=> true,

        );
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $contents = curl_exec($ch);
        $company_list1 = json_decode($contents);
      
        $people_list1 = json_decode($contents);
        curl_close($ch);
        //Count people result
       $teamCollectionPlayerList = collect((array)$company_list1->data);
           $myCollectionObj = collect((array)$company_list1->data);
     // print_r($myCollectionObj); exit;
        $this->data['people_list1'] = $myCollectionObj;
       
        $job_title = $teamCollectionPlayerList->unique('job_title'); 
       //print_r($job_title);exit;
        
        $job_company_founded = $teamCollectionPlayerList->unique('job_company_founded');
        $job_company_size = $teamCollectionPlayerList->unique('job_company_size');
        $job_company_industry = $teamCollectionPlayerList->unique('job_company_industry');
        $job_company_location_name = $teamCollectionPlayerList->unique('job_company_location_name');
        $job_company_location_country = $teamCollectionPlayerList->unique('job_company_location_country');
        $job_title_role = $teamCollectionPlayerList->unique('job_title_role');
        $job_company_name = $teamCollectionPlayerList->unique('job_company_name');
      
        
        $this->data['job_company_founded'] =  $job_company_founded->all();
        $this->data['job_title'] =  $job_title->all();
        $this->data['job_company_size'] =  $job_company_size->all();
        $this->data['job_company_industry'] =  $job_company_industry->all();
        $this->data['job_company_location_name'] =  $job_company_location_name->all();
        $this->data['job_company_location_country'] =  $job_company_location_country->all();
        $this->data['job_title_role'] =  $job_title_role->all();
        $this->data['job_company_name'] =  $job_company_name->all();
        $this->data['get_all_history'] = History::where('user_id',Auth::id())->orderBy('id', 'DESC')->limit(10)->get()->toArray();
        $this->data['get_all_save_history'] = SaveHistory::select('save_name')->groupBy('save_name')->where('user_id',Auth::id())->orderBy('save_name', 'DESC')->limit(10)->get()->toArray();
        $this->data['get_group_history'] = SaveHistory::where('user_id',Auth::id())->orderBy('id', 'DESC')->get()->toArray();
        $this->data['company_list'] =  $company_list1;
        
       
        $this->data['people_list'] =  $people_list1;

        $user_id = Auth::id();
        $this->data['user_list'] = CusList::Where("user_id", $user_id)->get();
        $this->data['plans'] = UserPlan::Where("user_id", $user_id)->get();
        
        
        return view('customer.prospecting',$this->data);
    }
    */
            
  /*  public function prospecting(Request $request)
            {
            $data = array(
                "page" => 1,
                "rows"=> 10,
                "has_email"=> true,
                "has_phone"=> true,
                "mask"=> true,
                 "fields"=> ["full_name","job_company_name","work_email","mobile_phone","phone_numbers","emails"],

                 "filters"=> [
        [
            "name"=> "full_name",
            "exclude"=> false,
            "input"=> ["tom","jack"]
        ],
        [
            "name"=> "job_company_name",
            "exclude"=> true,
            "input"=> ["amazon"]
        ]
        ]
            );
            
            $apiurl     = 'http://65.108.142.221:8087/getData';
            $data_array = json_encode( $data );
            $curl       = curl_init();
            curl_setopt( $curl, CURLOPT_URL, $apiurl );
            curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
            curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
            curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) );
            $result = curl_exec( $curl );
            echo "<pre>";
            print_r( json_decode( $result, true ) );
            echo "</pre>";
            curl_close( $curl );
            
    }*/
    
    
    public function prospecting(Request $request)
    { 
       $page = !empty($_REQUEST['page'])?$_REQUEST['page']:1;
     
        //Call New Api Start Here
        $new_api_data = array(
                "page" => $page,
                "rows"=> 10,
                "has_email"=> true,
                "has_phone"=> true,
                "mask"=> true,
                 "fields"=> ["full_name","job_company_name","work_email","mobile_phone","phone_numbers","emails"],
                 "filters"=> [
                    [
                        "name"=> "full_name",
                        "exclude"=> false,
                        "input"=> ["tom","jack"]
                    ],
                    [
                        "name"=> "job_company_name",
                        "exclude"=> true,
                        "input"=> ["amazon"]
                    ]
                ]
            );
            
        $new_api_url  = env('API_URL').'getData';
        $new_api_data_array = json_encode( $new_api_data );
        $new_api_curl = curl_init();
        curl_setopt( $new_api_curl, CURLOPT_URL, $new_api_url );
        curl_setopt( $new_api_curl, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $new_api_curl, CURLOPT_POSTFIELDS, $new_api_data_array );
        curl_setopt( $new_api_curl, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) );
        $new_api_result = curl_exec($new_api_curl);
        $new_api_responce = json_decode( $new_api_result, true );
        curl_close( $new_api_curl );
        //Check iF responce is exit or not
        //echo "<pre>"; print_r( $new_api_responce ); echo "</pre>"; exit;
        $people_list = [];
        if($new_api_responce['statusCode'] == 200){
            $people_list = $new_api_responce['data'];
        } 
        
        $company_list = [];
        if($new_api_responce['statusCode'] == 200){
            $company_list = $new_api_responce['data'];
        }
        //Call New Api End Here
        
        //Set all data in array
        $this->data['get_all_history'] = History::where('user_id',Auth::id())->orderBy('id', 'DESC')->limit(10)->get()->toArray();
        $this->data['get_all_save_history'] = SaveHistory::select('save_name')->groupBy('save_name')->where('user_id',Auth::id())->orderBy('save_name', 'DESC')->limit(10)->get()->toArray();
        $this->data['get_group_history'] = SaveHistory::where('user_id',Auth::id())->orderBy('id', 'DESC')->get()->toArray();
        $this->data['people_list'] =  $people_list;
        $this->data['company_list'] =  $company_list;
        $user_id = Auth::id();
        $this->data['user_list'] = CusList::Where("user_id", $user_id)->get();
        $this->data['plans'] = UserPlan::Where("user_id", $user_id)->get();
        //return view with pass all data
        return view('customer.prospecting',$this->data);
    }
    
    
    
    public function paginate($items, $perPage = 10, $page = null, $options = [])
    {
       
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
       
        $items = $items instanceof Collection ? $items : Collection::make($items);
     
        $limit = $page * 20;
         
        return new LengthAwarePaginator($items->forPage($page, $perPage), $limit, $perPage, $page, $options);
    }
    public function list()
    {
        $user_id = Auth::id();
        // $list_data = CusList::Where("user_id", $user_id)->get();
        
        $list_data = CusList::Where("user_id", $user_id)->get();
        //$list_count = CusList::where("user_id", $user_id)->count();
        $list_count = ProspectingList::where('user_id', $user_id)->count();
        return view('customer.list',compact('list_data','list_count'));
    }
    public function all_contacts(){
        $user_id = Auth::id();
        $all_contact_list = CusList::Where("user_id", $user_id)->get();
        $all_contact_list = CusList::all();
        dd( $all_contact_list );
        // return view('customer.list',compact('$all_contact_list'));
    }
    
    public function team()
    {
        $user_id = Auth::id();
        $team = User::Where("id", $user_id)->get();
        $team_plan = UserPlan::Where("user_id", $user_id)->get();
        return view('customer.team',compact('team','team_plan'));
    }
    public function plans()
    {
        $user_id = Auth::id();
        $this->data['plan'] = Plan::get();
        $this->data['current_plan'] = UserPlan::Where("user_id", $user_id)->first();
        return view('customer.plans.all-plan-list',$this->data);
    }
    
    public function integrations()
    {
        return view('customer.integrations');
    }
    
    public function api()
    {
        return view('customer.api');
    }
    
    public function free_credits()
    {
        return view('customer.get-free-credits');
    }
    
    public function lab()
    {
        return view('customer.labs');
    }
    
    public function account()
    {   
        error_reporting(0);
        $user_id = Auth::id();
        
        
        $checkmyplan = UserPlan::with(['plandetail','userDetail','orderDetail'])->Where("user_id", $user_id)->first();
       /// print_r($checkmyplan['orderDetail']); die;
        if(@$checkmyplan['plandetail']['billing_style'] == "Free"){
           
             $plan_date = Carbon::parse(@$checkmyplan['updated_at'])->addMonth()->format('F d,Y');
        }elseif(@$checkmyplan['plandetail']['billing_style'] == "month"){
            $plan_date = Carbon::parse(@$checkmyplan['updated_at'])->addYear()->format('F d,Y');
             
        }else{
            $plan_date = Carbon::now()->format('F d,Y');
        }
        
        // $myaccount = User::Where("id", $user_id)->get();
        
        // $myuser_plane = UserPlan::Where("user_id", $user_id)->get();
        // $order_history = Order::Where("user_id", $user_id)->get();
        // foreach ($myuser_plane as $key => $value) {
        //   $plan_id = $value->plan_id;
        // 'myaccount','currentuser_plane','order_history',
        //   $currentuser_plane = Plan::Where("id", $plan_id)->get();
        // }
        
        return view('customer.account',compact('plan_date','checkmyplan'));
    }

    public function account_update(Request $request, $id)
    {
        $update = User::where('id', $id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
        return redirect()->back()->with('status','Account Updated Successfully!');
    }

    public function account_reset_password(Request $request, $id)
    {
        function rand_string( $length ) {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            return substr(str_shuffle($chars),0,$length);
        }
        $user = User::find($id);
        $password = rand_string(8);
           $data = [
                    'password' => $password,
            ];
            $send = mail::to("rahultestcare@gmail.com")->send(new account_reset_password($data));
     
          if ($send) {
               return redirect()->back()->with('status','Sorry! Please try again latter');
          }else{
                $user->password = Hash::make($password);
                $user->update();
                return redirect()->back()->with('status','Successfully password send in your mail');
             }  
    }


    public function support()
    {
        return view('customer.support');
    }
    public function join_community()
    {
        return view('customer.join-community');
    }
    
    
    /************ New Website Code **************/
    /*public function price(Request $request)
    {

         // print_r($request->job_company_name);
       $page = !empty($_REQUEST['page'])?$_REQUEST['page']:1;
   
      
    //     if(!empty($pages)){
            
    //       $page = intdiv($pages,10) +1;
        
    //   }else{
    //       $page = 1;
    //   }
      // $limit = 20;
     
       $api_secret = env('API_SECRET'); 
       $api_url = env('API_URL'); 

        $url =  $api_url.''."fetchAll";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
     
        $data = array(
            "api_secret" => $api_secret,
            "page" => $page,
            "limit" => 100,
            "order" => "ASC",
            "hasMore"=> true,

        );
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $contents = curl_exec($ch);
        $company_list1 = json_decode($contents);
      
        $people_list1 = json_decode($contents);
        curl_close($ch);
    //Count people result
       $teamCollectionPlayerList = collect((array)$company_list1->data);
           $myCollectionObj = collect((array)$company_list1->data);

        $this->data['people_list1'] = $myCollectionObj;
        if($request->job_company_name){
         // $this->search_filter($request->filter_name);
        // $company_list1 = collect((array)$company_list1->data)->whereIn('job_company_name',$request->job_company_name);
         
        }
        
   
       //  $this->data['people_list1']->withPath('/lusha/prospecting');
       
       
        $job_title = $teamCollectionPlayerList->unique('job_title');
        
        $job_company_founded = $teamCollectionPlayerList->unique('job_company_founded');
        $job_company_size = $teamCollectionPlayerList->unique('job_company_size');
        $job_company_industry = $teamCollectionPlayerList->unique('job_company_industry');
        $job_company_location_name = $teamCollectionPlayerList->unique('job_company_location_name');
        $job_company_location_country = $teamCollectionPlayerList->unique('job_company_location_country');
        $job_title_role = $teamCollectionPlayerList->unique('job_title_role');
         $job_company_name = $teamCollectionPlayerList->unique('job_company_name');
        
        
        $this->data['job_company_founded'] =  $job_company_founded->all();
        $this->data['job_title'] =  $job_title->all();
        $this->data['job_company_size'] =  $job_company_size->all();
        $this->data['job_company_industry'] =  $job_company_industry->all();
        $this->data['job_company_location_name'] =  $job_company_location_name->all();
        $this->data['job_company_location_country'] =  $job_company_location_country->all();
        $this->data['job_title_role'] =  $job_title_role->all();
         $this->data['job_company_name'] =  $job_company_name->all();
        $this->data['get_all_history'] = History::where('user_id',Auth::id())->orderBy('id', 'DESC')->get()->toArray();
        $this->data['get_all_save_history'] = SaveHistory::select('save_name')->groupBy('save_name')->where('user_id',Auth::id())->get()->toArray();
        $this->data['get_group_history'] = SaveHistory::where('user_id',Auth::id())->orderBy('id', 'DESC')->get()->toArray();
        $this->data['company_list'] =  $company_list1;
        
        // echo "<pre>";
        // print_r($this->data['get_all_save_history']); die;
       
        $this->data['people_list'] =  $people_list1;

        $user_id = Auth::id();
        $this->data['user_list'] = CusList::Where("user_id", $user_id)->get();
        $this->data['plans'] = UserPlan::Where("user_id", $user_id)->get();
        
        
        return view('new_website.price',$this->data);
      
    }*/
    
    public function enterprise()
    {
       
        return view('new_website.enterprise');
    }
    
    /*public function headersearch(Request $request){
    $page = !empty($_REQUEST['page'])?$_REQUEST['page']:1;
   

     
       $api_secret = env('API_SECRET'); 
       $api_url = env('API_URL'); 

        $url =  $api_url.''."fetchAll";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
     
        $data = array(
            "api_secret" => $api_secret,
            "page" => $page,
            "limit" => 100,
            "order" => "ASC",
            "hasMore"=> true,

        );
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $contents = curl_exec($ch);
        $company_list1 = json_decode($contents);
      
        $people_list1 = json_decode($contents);
        curl_close($ch);
        //Count people result
        $teamCollectionPlayerList = collect((array)$company_list1->data);
           $myCollectionObj = collect((array)$company_list1->data);

        $this->data['people_list1'] = $myCollectionObj;
        if($request->filter_name){
         // $this->search_filter($request->filter_name);
         $company_list1 = collect((array)$company_list1->data)->whereIn('job_company_name',$request->filter_name);
        }
        
   
       //  $this->data['people_list1']->withPath('/lusha/prospecting');
       
       
        $job_title = $teamCollectionPlayerList->unique('job_title');
        
        $job_company_founded = $teamCollectionPlayerList->unique('job_company_founded');
        $job_company_size = $teamCollectionPlayerList->unique('job_company_size');
        $job_company_industry = $teamCollectionPlayerList->unique('job_company_industry');
        $job_company_location_name = $teamCollectionPlayerList->unique('job_company_location_name');
        $job_company_location_country = $teamCollectionPlayerList->unique('job_company_location_country');
        $job_title_role = $teamCollectionPlayerList->unique('job_title_role');
        
        $this->data['job_company_founded'] =  $job_company_founded->all();
        $this->data['job_title'] =  $job_title->all();
        $this->data['job_company_size'] =  $job_company_size->all();
        $this->data['job_company_industry'] =  $job_company_industry->all();
        $this->data['job_company_location_name'] =  $job_company_location_name->all();
        $this->data['job_company_location_country'] =  $job_company_location_country->all();
        $this->data['job_title_role'] =  $job_title_role->all();
        $this->data['get_all_history'] = History::where('user_id',Auth::id())->orderBy('id', 'DESC')->get()->toArray();
        $this->data['get_all_save_history'] = SaveHistory::select('save_name')->groupBy('save_name')->where('user_id',Auth::id())->get()->toArray();
        $this->data['get_group_history'] = SaveHistory::where('user_id',Auth::id())->orderBy('id', 'DESC')->get()->toArray();
        $this->data['company_list'] =  $company_list1;
        // echo "<pre>";
        // print_r($this->data['company_list']); die;
       
        $this->data['people_list'] =  $people_list1;

        $user_id = Auth::id();
        $this->data['user_list'] = CusList::Where("user_id", $user_id)->get();
        $this->data['plans'] = UserPlan::Where("user_id", $user_id)->get();
        
        
        
        return view('customer.prospecting_search',$this->data);
    }*/
}
