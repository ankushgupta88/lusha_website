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
               <button type="button" type="design">Search</button>
               <h1 class="hero__title fw-bold">{{$search_name}}</h1>
               <ul>
                  <li><a href="#">Home</a><span class="separator"></span></li>
                  <li><a href="#">Search</a><span class="separator"></span></li>
                  <p>{{$search_name}}</p>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!--blog content section-->   
<section class="blog_content_area">
    <section class="blog_content_area">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
             @if(!empty($blogDetail))
             @foreach($blogDetail as $key => $value)
             
            <div class="blog_content_main">
               <img src="{{asset('public/upload/blog/'.$value['blog_image'])}}">
            </div>
            <div class="entry_header">
               <li><a class="url fn n post-author" href="http://yoursiteview.online/author/admin/"> <img alt="" src="https://testcaresort.com/lusha/public/assets/images/admin.png"> {{$userdetail->name}}</a></li>
               <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i><a href="#">{{Carbon::parse($value['created_at'])->format('F d,Y')}}</a></li>
               <li><i class="fa fa-comment-o" aria-hidden="true"></i>{{($value['blog_count'] > 0)?$value['blog_count']:"No"}} Comment</li>
            </div>
            <div class="entry-content">
               <h3>{{$value['blog_title']}}</h3>
            </div>
             <div class="my-account-btn">
                <a href="{{url('/blog-detail',$value['id'])}}"><button class="btn account_btn py-3">Read More<i class="fa fa-arrow-right" aria-hidden="true"></i>
 </button></a>
            </div> 
            @endforeach
            @else
            <h2>No Data Found! </h2>
            @endif
          
         </div>
        <div class="col-md-4">
             @include('layouts.blog_sidebar')
         </div>
      </div>
   </div>
</section>
   


@endsection
