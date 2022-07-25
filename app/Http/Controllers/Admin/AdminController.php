<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use App\Models\ProspectingList;

class AdminController extends Controller
{
    //function for admin dashboartd
    public function admin_profile(){
        $user_id = Auth::id();
        $myaccount = User::Where("id", $user_id)->get();
        return view('admin.account.account',compact('myaccount'));
    }

    public function account_update(Request $request, $id)
    {
        $update = User::where('id', $id)
                ->update([
                    'name' => $request->name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                ]);
        return redirect()->back()->with('status','Account Updated Successfully');
    }

    //function for admin change password view
    public function changePassword()
    {
        $view =  view('admin.account.change_password');
        return $view;
    }

         //function for change password after submit
    public function submitChangePassword(Request $request)
    {
        $user = Auth::user();
        $validated = request()->validate([ 
            'old_password' => 'required',
            'new_password'   => 'required|required_with:confirm_password|same:confirm_password',
            'confirm_password'   => 'required', 
        ]);
        
        $id = $user->id;
        $user_type = $user->user_type;
       
        $hashedPassword = $user->password;
        
        if (\Hash::check($request->old_password , $hashedPassword )) {
             if (!\Hash::check($request->new_password , $hashedPassword)) {
                //Generate password
                 $new_password = Hash::make($request->new_password);
                 $update_password = User::where('id', $id)
                                    ->Where('user_type',$user_type)
                                    ->update([
                                        'password'  => $new_password
                                    ]); 
                    if($update_password){
                        return back()->with('success','Password Changed Successfully');
                    } else {
                            return back()->with('unsuccess','Opps Something wrong!');
                        }               
             }else{
                  return back()->with('unsuccess','New password can not be the old password!');
             }
            
        }else{
            return back()->with('unsuccess','old password doesnt matched');
        }
    }


    //function for admin dashboartd
    public function add_api(){
        $view =  view('admin.api.add-api');
        return $view;
    }
    
     //function for admin dashboartd
    public function all_api(){
        $view =  view('admin.api.all-api');
        return $view;
    }  
     //function for admin dashboartd
    public function add_integrations(){
        $view =  view('admin.integrations.add-integrations');
        return $view;
    }
    
     //function for admin dashboartd
    public function all_integrations(){
        $view =  view('admin.integrations.all-integrations');
        return $view;
    }
        
      //function for admin dashboartd
    public function all_prospecting(){
        $this->data['prospecting'] = ProspectingList::orderBy('id','desc')->get()->toArray();
        return view('admin.prospecting.all-prospecting',$this->data);
    }
    
    public function editprospecting($id){
      
        $this->data['prospecting'] = ProspectingList::where('id',$id)->first();
        return view('admin.prospecting.prospecting_edit',$this->data);
    }
    
     public function updateprospecting(Request $request,$id){
       print_r($request->all());
        $prospecting = ProspectingList::where('id',$id)->first();
        $prospecting->full_name = $request->full_name;
        $prospecting->job_company_name = $request->job_company_name;
        $prospecting->mobile_phone = $request->mobile_phone;
        $prospecting->job_title = $request->job_title;
        $prospecting->new_departments = $request->new_departments;
        
        
        $prospecting->status = $request->status;
        $prospecting->save();
        return redirect('/admin/prospecting/all-prospecting')->with('success','Prospecting Updated Successfully!');
        
    }
    
     public function deleteprospecting($id){
      
        $prospecting = ProspectingList::where('id',$id)->delete();
        return redirect('/admin/prospecting/all-prospecting')->with('success','Prospecting Deleted Successfully!');
    }
    
}


