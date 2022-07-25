@extends('layouts.master2')
@section('content')
<!--banner section-->
<section class="banner_section_main">
   <div class="container-fluid">
   <div class="row align-items-center">
      <div class="col-md-6">
         <div class="banner_text  text-center text-md-start">
            <h1 class="hero__title fw-bold">Make The Best Prospecting List</h1>
            <img src="{{url('public/assets/images/prospecting_1.png')}}" alt="Image"/ class="img-fluid">
            <p class="hero__subtitle">In seconds, use any search criteria to retrieve hundreds of verified emails, work phone numbers, and direct dials for your clients.</p>
            <div class="banner-email mt-4">
               @if(Auth::user())
               <div class="my-account-btn">
                  <a href="{{url('/dashboard')}}"><button class="btn account_btn py-3">Get Started </button></a>
                  @else
                  <a href="{{url('/register')}}"><button class="btn py-3 get_start">Get Started</button></a>
                  @endif 
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="banner-img">
               <img src="{{url('public/assets/images/prospecting_1.png')}}" alt="Image"/ class="img-fluid">
            </div>
         </div>
      </div>
   </div>
</section>
<!--benefits section-->
<section class="benefits-section block-space block-space-bottom">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="main_title text-center">
               <h1 class="main-title-text fw-bold"> Make Prospecting Easier</h1>
               <p>Use our service to reduce the amount of time they spend prospecting.</p>
            </div>
         </div>
      </div>
      <div class="row pt-4 pt-md-5">
         <div class="col-lg-3">
            <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
               <i class="fa fa-list-ul" aria-hidden="true"></i>
               <h5 class="fw-bold mb-0 py-2 mt-3"> More contacts </h5>
               <p class="mb-0 px-4"> Every month, our users receive new contacts and use to expand. </p>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
               <i class="fa fa-bullseye" aria-hidden="true"></i>
               <h5 class="fw-bold mb-0 py-2  mt-3"> Increase connect rate </h5>
               <p class="mb-0 px-4"> With accurate direct dialing, you can reach the best planners.</p>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
               <i class="fa fa-bullseye" aria-hidden="true"></i>
               <h5 class="fw-bold mb-0 py-2  mt-3"> Boost email response </h5>
               <p class="mb-0 px-4"> Our only confirmed emails get you into the inbox of any prospect.</p>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
               <i class="fa fa-file-o" aria-hidden="true"></i>
               <h5 class="fw-bold mb-0 py-2  mt-3"> Integrations </h5>
               <p class="mb-0 px-4"> Automate your work by integrating it with different tools.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!--services section-->
<section class="services_main">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="services_left">
               <img src="{{url('public/assets/images/prospecting_2.jpg')}}" alt="Image"/ class="img-fluid">
            </div>
         </div>
         <div class="col-md-6">
            <div class="services_right">
               <h2>Provide Trusted Data</h2>
               <p>Our data is committed to and in accordance with the <strong>GDPR</strong> and <strong>CCPA</strong> regulations.</p>
               <a href="#"><button class="btn more_details py-3">More Details</button></a>
            </div>
         </div>
      </div>
      <div class="row services_right_main">
         <div class="col-md-6 services_right_inner">
            <div class="services_right">
               <h2>Integrate To Your CRM</h2>
               <p>With direct CRM connectors, you can attract more quality leads and simply move them to your CRM.</p>
               <a href="{{url('/site-integrations')}}"><button class="btn more_details py-3">More Details</button></a>
            </div>
         </div>
         <div class="col-md-6">
            <div class="services_left">
               <img src="{{url('public/assets/images/prospecting_3.png')}}" alt="Image"/ class="img-fluid">
            </div>
         </div>
      </div>
   </div>
</section>
<!--number counter section-->
<section class="number_counter_section block-space block-space-bottom">
   <div class="container">
      <div class="row">
         <div class="col-md-3 col-sm-6">
            <div class="counter-box number_count_content text-center">
               <div class="counter_cont">
                  <h2 class="fw-bold pt-3 counter">80 </h2>
                  <span> M</span>
               </div>
               <p> Email Address </p>
            </div>
         </div>
         <div class="col-md-3 col-sm-6">
            <div class="counter-box number_count_content text-center">
               <div class="counter_cont">
                  <h2 class="fw-bold pt-3 counter">120 </h2>
                  <span> M</span>
               </div>
               <p> Business Profiles </p>
            </div>
         </div>
         <div class="col-md-3 col-sm-6">
            <div class="counter-box number_count_content text-center">
               <div class="counter_cont">
                  <h2 class="fw-bold pt-3 counter">25 </h2>
                  <span> M</span>
               </div>
               <p> Company Profiles </p>
            </div>
         </div>
         <div class="col-md-3 col-sm-6">
            <div class="counter-box number_count_content text-center">
               <div class="counter_cont">
                  <h2 class="fw-bold pt-3 counter">75 </h2>
                  <span> M</span>
               </div>
               <p> Direct Dials </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!--increase sales section-->
<section class="sales_main">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6">
            <div class="sales_left">
               <h2>Increase Your Sales </h2>
               <p>Use our service to reduce the amount of time they spend prospecting.</p>
               <div class="sales_left_content">
                  <div class="row">
                     <div class="col-2">
                        <div class="sales_icon" style="background: #1b5bfd;">
                           <i class="fa fa-filter" aria-hidden="true"></i>
                        </div>
                     </div>
                     <div class="col-10">
                        <div class="sales_text">
                           <h2>Filter any lead data</h2>
                           <p>Utilize our industry, geography, experience level, and mobile filters to narrow down your results.</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-2">
                        <div class="sales_icon" style="background: #ffb116;">
                           <i class="fa fa-file-o" aria-hidden="true"></i>
                        </div>
                     </div>
                     <div class="col-10">
                        <div class="sales_text">
                           <h2>Enrich prospect lists</h2>
                           <p>Select and reveal more contact details in few clicks to your CRM. Get the data you need.</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-2">
                        <div class="sales_icon" style="background: #f71966;">
                           <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                     </div>
                     <div class="col-10">
                        <div class="sales_text">
                           <h2>Latest and stored searches</h2>
                           <p>Any of your searches can be accessed at any time. Pick up where you left off to increase productivity.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="sales_right">
               <img src="{{url('public/assets/images/prospecting_4.png')}}" alt="Image"/ class="img-fluid">
            </div>
         </div>
      </div>
   </div>
</section>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
   $(document).ready(function() {
   
   $('.counter').each(function () {
   $(this).prop('Counter',0).animate({
   Counter: $(this).text()
   }, {
   duration: 4000,
   easing: 'swing',
   step: function (now) {
   $(this).text(Math.ceil(now));
   }
   });
   });
   
   });
</script>
@endsection