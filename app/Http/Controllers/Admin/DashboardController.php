<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;
use App\Models\UserPlan;
use App\Models\User;
use App\Models\ContactSale;
use App\Models\ApplyJob;
use App\Models\Order;
class DashboardController extends Controller
{
    //function for admin dashboartd
    public function index(){
        $users[] = User::count();
        $plans[] = Plan::count();
        $contact[] = ContactSale::count();
        $apply_job[] = ApplyJob::count();
        $orderlist = Order::with('order_user_list','order_user_plan_list')->orderBy('id','desc')->limit(7)->get()->toArray();
        $view =  view('admin.dashboard',compact('users','plans','contact','apply_job','orderlist'));
        return $view;
    }
    
    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function logout(Request $request)
    {
        $user = Auth::user();
		if ($user->user_type == "Admin") {
		    $request->session()->flush();
        	$request->session()->regenerate();
        	return redirect('/admin-login');
		}
    }
}
