@extends('layouts.master2')
@section('content')


<!--banner section-->
    <section class="banner_section_main banner_section_main2">
        <div class="container-fluid">
         <div class="row align-items-center">
             <div class="col-md-5">
                 <div class="banner_text  text-center text-md-start">
                     <span style="color:#f7f9fc;font-size:17px;font-weight: 600;">Our API</span>
                     <h1 class="hero__title fw-bold"><span style="color: #FFB116;">Enhance</span> your systems, with our reliable B2B <span style="color: #FFB116;">data</span></h1>
                     <img src="{{url('public/assets/images/App-development-bro.png')}}" alt="Image"/ class="img-fluid">
                     <p class="hero__subtitle">Our API makes it simple to supplement any database, system, or app with correct B2B connections and business data.</p>
                     <div class="banner-email mt-4">
                    @if(Auth::user())
                      <div class="my-account-btn contact-sale">
                        <a href="{{url('/dashboard')}}"><button class="btn account_btn py-3">Contact sales team </button></a>
                      </div> 
                    @else
                      <div class="my-account-btn contact-sale">
                        <a href="{{url('/register')}}"><button class="btn account_btn py-3">Contact sales team </button></a>
                      </div>
                    @endif 
                 </div>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="banner-img">
                     <img src="{{url('public/assets/images/App-development-bro.png')}}" alt="Image"/ class="img-fluid">
                 </div>
             </div>
         </div>
        </div>
    </section>
    


<!--increase sales section-->
   <section class="sales_main sales_main2">
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-6">
                   <div class="sales_left">
                       <h2>Getting Started With Our API </h2>
                       <p>Only 3 Easy steps to start </p>
                       <div class="sales_left_content">
                           <div class="row">
                           <div class="col-2">
                               <div class="sales_icon sales_icon2" style="background: #1b5bfd;">
                                   <h3>1</h3>
                               </div>
                           </div>
                           <div class="col-10">
                               <div class="sales_text">
                                   <h2>Contact with our sales team</h2>
                                   <p>Contact sales if you want to get started using our API. Our professionals will assist you in getting started as soon as possible.</p>
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-2">
                               <div class="sales_icon sales_icon2" style="background: #ffb116;">
                                   <h3>2</h3>
                               </div>
                           </div>
                           <div class="col-10">
                               <div class="sales_text">
                                   <h2>What data do you require?</h2>
                                   <p>Choose whether you want to use our person’s API, our company’s API, or both.</p>
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-2">
                               <div class="sales_icon sales_icon2" style="background: #f71966;">
                                   <h3>3</h3>
                               </div>
                           </div>
                           <div class="col-10">
                               <div class="sales_text">
                                   <h2>Maintain the validity of your data</h2>
                                   <p>API could be setup by your developer to update on a regular basis, ensuring that your data is as clean as possible.</p>
                               </div>
                           </div>
                       </div>
                       </div>
                   </div>
               </div>
               <div class="col-md-6">
                   <div class="sales_right">
                       <img src="{{url('public/assets/images/Mobile-testing.png')}}" alt="Image"/ class="img-fluid">
                   </div>
               </div>
           </div>
       </div>
   </section>


<!--services section-->
<section class="services_main services_main2">
    <div class="container">
         <div class="row services_right_main">
            <div class="col-md-6 services_right_inner">
                <div class="services_right">
                    <h2>API for companies</h2>
                    <p>Enhance the systems with a detailed company profile that includes information such as the company name, company size, industry, website, and tech visuals.</p>
                    <a href="#"><button style="background:#f71966;" class="btn more_details view_details  py-3">View Details</button></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="services_left">
                    <img src="{{url('public/assets/images/Data-extraction.png')}}" alt="Image"/ class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="services_left">
                    <img src="{{url('public/assets/images/Code-review.png')}}" alt="Image"/ class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="services_right">
                    <h2>API for individuals</h2>
                    <p>Add correct prospect contact data to your system, such as direct calls, email addresses, and much more.</p>
                     @if(Auth::user())
                       <a href="{{url('/api')}}"><button class="btn more_details view_details view_details_btn py-3">View Details</button></a>
                    @else
                      <a href={{url('/register')}}><button class="btn more_details view_details view_details_btn py-3">View Details</button></a>
                    @endif 
                   
                </div>
            </div>
        </div>
    </div>
</section>



 

   
   
   
   
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
<!--   <script>-->
<!--       $(document).ready(function() {-->

<!--$('.counter').each(function () {-->
<!--$(this).prop('Counter',0).animate({-->
<!--Counter: $(this).text()-->
<!--}, {-->
<!--duration: 4000,-->
<!--easing: 'swing',-->
<!--step: function (now) {-->
<!--$(this).text(Math.ceil(now));-->
<!--}-->
<!--});-->
<!--});-->

<!--});-->
<!--   </script>-->
 
@endsection  
