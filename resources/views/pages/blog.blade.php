@extends('layouts.master2')
@section('content')
<?php
use Carbon\Carbon;

?>
<!--banner section-->
<section class="banner_section_main career_banner pricing_banner blog_banner">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-12">
            <div class="banner_text  text-center text-md-start">
               <button type="button" type="design">{{$blogDetail['blogdetail']['category_name']}}</button>
               <h1 class="hero__title fw-bold">{{$blogDetail['blog_title']}}</h1>
               <ul>
                  <li><a href="#">Home</a><span class="separator"></span></li>
                  <li><a href="#">{{$blogDetail['blogdetail']['category_name']}}</a><span class="separator"></span></li>
                  <p>{{$blogDetail['blog_title']}}</p>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!--blog content section-->   
<section class="blog_content_area">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <div class="blog_content_main">
                
               <img src="{{asset('public/upload/blog/'.$blogDetail['blog_image'])}}">
            </div>
            <div class="entry_header">
               <li><a class="url fn n post-author" href="http://yoursiteview.online/author/admin/"> <img alt="" src="https://testcaresort.com/lusha/public/assets/images/imgggg.jpg"> admin</a></li>
               <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i><a href="#">{{Carbon::parse($blogDetail['created_at'])->format('F d,Y')}}</a></li>
               <li><i class="fa fa-comment-o" aria-hidden="true"></i>{{($blogDetail['blog_count'] > 0)?$blogDetail['blog_count']:"No"}} Comment</li>
            </div>
            <div class="entry-content">
                <h3> {!! $blogDetail['blog_title'] !!} </h3>
               <p> {!! $blogDetail['description'] !!} </p>
               <!--<p>Objectively restore stand-alone markets rather than enterprise-wide products. Uniquely underwhelm best-of-breed mindshare through adaptive niches. Interactively leverage existing innovative e-services seamlessly parallel task open-source content without resource sucking technology.</p>-->
               <!--<p>Dramatically cultivate frictionless communities with enterprise-wide customer service. Dramatically simplify web-enabled growth strategies rather than integrated imperatives. Interactively leverage existing innovative e-services customer service. Intrinsicly impact web-enabled value vis-a-vis innovative customer service. Continually procrastinate efficient growth strategies for backend experiences.</p>-->
            </div>
            <!--<blockquote class="blog-quotes">-->
            <!--   <p>Globally network long-term high-impact schemas vis-a-vis distinctive e-commerce cross-media infrastructures rather than ethical.</p>-->
            <!--   <cite>Daryl Smith</cite>-->
            <!--</blockquote>-->
            <div class="blog_form">
               <h2>Leave a Reply</h2>
               <p>Your email address will not be published. Required fields are marked *</p>
               <form method="post" action="{{url('/add-comment')}}">
                   @csrf
                  <div class="row">
                     <div class="col-md-6">
                        <div class="blog_fields">
                           <input type="text" class="form-control" name="name" id="exampleInputText1" aria-describedby="textHelp" placeholder="Name*" value="{{ session('name') }}" required>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="blog_fields">
                           <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ session('email') }}" placeholder="Email*" required>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-floating">
                           <textarea class="form-control" placeholder="Your Comment" name="description" id="floatingTextarea" required></textarea>
                        </div>
                        <div class="save_comments">
                            
                            <input id="wp-comment-cookies-consent" type="checkbox" class="scales" id="scales" name="scales" value="{{session('scales')}}" <?php  if( session('scales') == 1){ echo "checked" ;} ?> />
                            <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                        </div>
                        <input type="hidden" name="blog_id" value="{{$blogDetail['id']}}">
                        <div class="post_comment">
                            <button type="submit">Post Comment</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-md-4">
             @include('layouts.blog_sidebar')
         </div>
      </div>
   </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    
    $(".scales").click(function() {
       var checked = $(this).is(':checked'); // Checkbox state
     // Select all
     if(checked){
         $('.scales').val(1);
     }else{
       // Deselect All
       $('.scales').val(0);
     }
    });
</script>
@endsection
