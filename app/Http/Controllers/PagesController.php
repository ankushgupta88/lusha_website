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
use App\Models\Career;
use App\Models\ApplyJob;
use Mail;
use App\Mail\SendMail;
use App\Models\Professional;
use App\Models\Blog;
use App\Models\Comment;
use Session;
use App\Models\BlogCategory;

class PagesController extends Controller
{
    public function enterprise()
    {
      return view('pages.enterprise');   
    }
   
    public function customers()
    {
      return view('pages.customers');   
    }

    public function about()
    {
       $this->data['professionals']  = Professional::get()->toArray();
       return view('pages.about',$this->data);   
    }
    // career jobs
    public function career()
    {
      $career = Career::get();
      return view('pages.career.careers',compact('career'));   
    }
    


    public function career_job($id)
    {
       
      $this->data['career_job'] = Career::where('id',$id)->first();
      return view('pages.career.career_job_post',$this->data);   
    }

    // create a career job post
    public function apply_career_job(Request $request)
    {  
       //print_r($request->all()); die;
        //validation rule
        
          $validated   = $request->validate([
                'name' => 'required',
                'last_name' =>'required',
                'phone' =>  'required|digits:10',
                'resume' =>  'required',
                'email' => 'required|email'
            ], [
                'name.required' => 'Required',
                'email.required' => 'Required',
                'resume.required' => 'Required',
                'last_name.required' => 'Required',
                'phone.required' => 'Required'
            ]);
  if($request->file('resume')){
      $resume = $request->file('resume');
      $resume_name = $resume->getClientOriginalName();
      $resume->move(public_path('/upload/career/document'),$resume_name);
      $resume_path = "/upload/career/document" . $resume_name;
}
      $coverletter_name = '';
      if($request->file('coverletter')){
        $coverletter = $request->file('coverletter');
        $coverletter_name = $coverletter->getClientOriginalName();
        $coverletter->move(public_path('/upload/career/document'),$coverletter_name);
        $coverletter_path = "/upload/career/document" . $coverletter_name;
      }

      $portfolio_name = '';
      if($request->file('img_logo2')){
        $portfolio = $request->file('img_logo2');
        $portfolio_name = $portfolio->getClientOriginalName();
        $portfolio->move(public_path('/upload/career/document'),$portfolio_name);
        $portfolio_path = "/upload/career/document" . $portfolio_name;
      }

      // print_r($request->all());die;
        $create_career= ApplyJob::create([
                    'apply_position'    =>  $request->apply_position,
                    'position_id' =>  $request->position_id,
                    'name' =>  $request->name,
                    'last_name' =>  $request->last_name,
                    'email'  =>  $request->email,
                    'phone' => $request->phone,
                    'resume'  =>  $resume_name,                    
                    'linkedin_url' => $request->linkedin_url,
                    'web_url' =>  $request->web_url,
                    'coverletter' =>  $coverletter_name,
                    'portfolio' =>  $portfolio_name,
                    'description' =>  $request->message,
                ]);
        //check if Blog is create
        if($create_career){
            return redirect()->back()->with('success','Your application has been submitted. Good luck!');
        } else {
             return redirect()->back()->with('unsuccess','Oops something wrong!');
        }
            
    }

// career job end

    public function our_data()
    {
       // return view('new_website.ourdata');   
      return view('pages.our_data');   
    }

    public function data_sources()
    {
      return view('pages.data_sources');   
    }

    public function community_program()
    {
      return view('pages.community_program');   
    }

    public function terms_of_use()
    {
      return view('pages.terms_of_use');   
    }

    public function faq()
    {
      return view('pages.faq');   
    }

    public function site_extension()
    {
      return view('pages.extension');   
    }

    public function prospecting_platform()
    {
      return view('pages.prospecting_platform');   
    }

    public function site_api()
    {
      return view('pages.api');   
    }

    public function site_integrations()
    {
      return view('pages.integrations');   
    }

    public function term_services()
    {
      return view('pages.terms_services');   
    }

    public function privacy_policy()
    {
      return view('pages.privacy_policy');   
    }

    public function api_documents()
    {
      return view('pages.api_documents');   
    }

    public function privacy_center()
    {
      return view('pages.privacy_center');
    }

    public function help_support()
    {
      return view('customer.support');
    }
    
    /************** new website code **************/
    
    public function oursales()
    {
      return view('new_website.oursales');
    }
    
    
    public function marketDetail()
    {
      return view('new_website.marketing');
    }
    
    public function recruiters()
    {
      return view('new_website.recruiters');
    }
    
    public function contact()
    {
      return view('new_website.contact');
    }
    
     public function contactfrom(Request $request)
    {
        
        $validated = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'message' =>  'required',
            ], [
                'name.required' => 'Required',
                'email.required' => 'Required',
                'message.required' => 'Required',
            ]);
         $data   = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'message' => $request->message,
            ];
           
            $send = mail::to("ajaythakurcaresort@gmail.com")->send(new SendMail($data));
            return  redirect('/contact')->with('success','Your contuct-us from has been submitted. Good luck!');
    }
    
    
     public function blog()
    {
      return view('pages.blog');   
    }
    
      public function BlogDetail($id)
    {
       $this->data['blogDetail'] = Blog::withCount(['blog'])->with(['blogdetail'])->where('id',$id)->first();
       $this->data['search_name'] = $this->data['blogDetail']['blog_title'];
       //print_r($this->data); die;
        return view('pages.blog',$this->data);
    }
    
    public function AddComment(Request $request)
    {
        if($request->scales == 1){
            
            $request->session()->put([
               'name' =>$request->name,
                'email' =>$request->email,
                'scales' => 1,
            ]);
        }else{
            $request->session()->put([
               'name' =>'',
                'email' =>'',
                'scales' => ''
            ]);
        }
        $blog = new Comment();
        $blog->blog_id = $request->blog_id;
        $blog->name = $request->name;
        $blog->email = $request->email;
        $blog->description = $request->description;
        $blog->save();
       return  redirect('/blog-detail/'.$request->blog_id)->with('success','Blog Comment  has been submitted. Good luck!');
    }
    
     public function BlogSearch(Request $request)
    {
        if(!empty($request->search)){
         $this->data['userdetail']= User::where('user_type',"Admin")->first(); 
          $this->data['blogDetail'] = Blog::withCount(['blog'])->with(['blogdetail'])->where('blog_title', 'like', '%' . $request->search . '%')->get()->toArray();
        // print_r($this->data['blogDetail']); die;
          $this->data['search_name'] = $request->search;
           return view('pages.search',$this->data);
        }
           
    }
    
    public function CategorySearch(Request $request,$cat_id)
    {
         $this->data['userdetail']= User::where('user_type',"Admin")->first(); 
         $this->data['blogDetail'] = Blog::withCount(['blog'])->with(['blogdetail'])->where('category_id',$cat_id)->get()->toArray();
         $cat_name = BlogCategory::where('id',$cat_id)->first();
         $this->data['search_name'] = $cat_name['category_name'];
         return view('pages.search',$this->data);
       
           
    }
    
    
       
    
}
