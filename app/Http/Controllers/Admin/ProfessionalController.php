<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professional;
use App\Models\User;

class ProfessionalController extends Controller
{
        
    //function for admin dashboartd
    public function index(){
       
       $this->data['professional'] = Professional::orderBy('id','desc')->get()->toArray();
       return view('admin.professional.professional_list',$this->data);
    }
    
     //function for admin dashboartd
    public function create(Request $request){
      return view('admin.professional.professional_add');
      
    }
    
        //function for admin dashboartd
    public function store(Request $request){
        $validated = request()->validate([ 
            'name' => 'required',
            'image_file' =>'required',
            'designation'    => 'required',
            'description' =>  'required',
            'status'  =>  'required',
        ]);
         $professional = new Professional();
        if($request->hasFile('image_file')) {
            
        $user_img_name = $request->file('image_file');
        $user_name = time().'.'.$user_img_name->getClientOriginalExtension();
        $destinationPath = public_path('/upload/professional');
        $user_img_name->move($destinationPath, $user_name);
        $professional->image_file = $user_name;

      }
        
        $professional->name = $request->name;
        $professional->designation = $request->designation;
        $professional->description = $request->description;
        $professional->status = $request->status;
        $professional->save();
         if($professional){
                return redirect('admin/professional/professional-list')->with('success','Professional added successfully.');
            } else {
                die('here');
                return redirect()->back()->with('unsuccess','Oops something wrong!');
            }
      
    }
    
     //function for admin dashboartd
    public function edit($id){
      
      $this->data['professional'] =  Professional::where('id',$id)->first();
      return view('admin.professional.professional_edit',$this->data);
        
    }
      public function update(Request $request,$id){
          
        $professional =  Professional::where('id',$id)->first();
        
        if($request->hasFile('image_file')) {
           
            $user_img_name = $request->file('image_file');
            $user_name = time().'.'.$user_img_name->getClientOriginalExtension();
            $destinationPath = public_path('/upload/professional');
            $user_img_name->move($destinationPath, $user_name);
            $professional->image_file = $user_name;
            
       }
         $professional->name = $request->name;
        $professional->designation = $request->designation;
        $professional->description = $request->description;
        $professional->status = $request->status;
        $professional->save();
       
         if($professional){
                return redirect('admin/professional/professional-list')->with('success','Professional updated successfully.');
            } else {
                die('here');
                return redirect()->back()->with('unsuccess','Oops something wrong!');
            }
    }
    
      public function delete($id){
       $professional =  Professional::where('id',$id)->delete();
         return redirect('admin/professional/professional-list')->with('success','Professional deleted successfully.');
    }
    

}
