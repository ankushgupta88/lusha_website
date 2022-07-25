@extends('layouts.master2')
@section('content')
<!--banner section-->
<section class="banner_section_main our_data_banner">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-6">
            <div class="banner_text  text-center text-md-start">
               <h1 class="hero__title fw-bold">Trusted Data<br> By Millions</h1>
               <img src="{{url('public/assets/images/Usability-testing-pana.png')}}" alt="Image"/ class="img-fluid">
               <p class="hero__subtitle">It comes with most accurate data and compliant prospect and business data, sales intelligence is a step above the competition.</p>
               <div class="banner-email mt-4">
                  @if(Auth::user())
                  <div class="my-account-btn">
                     <a href="{{url('/dashboard')}}"><button class="btn account_btn py-3">Get Started </button></a>
                  </div>
                  @else 
                  <a href="{{url('/register')}}"><button class="btn py-3 get_start">Get Started</button></a>
                  @endif 
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="banner-img">
               <img src="{{url('public/assets/images/Usability-testing-pana.png')}}" alt="Image"/ class="img-fluid">
            </div>
         </div>
      </div>
   </div>
</section>
<!--number counter section-->
<section class="number_counter_section our_data_counter block-space block-space-bottom">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="main_title text-center">
               <h1 class="main-title-text fw-bold pb-4"> Our Progress & Report</h1>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 col-sm-6">
            <div class="counter-box number_count_content text-center">
               <i class="fa fa-briefcase" aria-hidden="true"></i>
               <div class="our_data_counter_inner">
                  <h2 class="fw-bold pt-3 counter">120</h2>
                  <span>M</span>
               </div>
               <p> Business Profiles </p>
            </div>
         </div>
         <div class="col-md-6 col-sm-6">
            <div class="counter-box number_count_content text-center">
               <i class="fa fa-building-o" aria-hidden="true"></i>
               <div class="our_data_counter_inner">
                  <h2 class="fw-bold pt-3 counter">120</h2>
                  <span>M</span>
               </div>
               <p> Decision Makers Email Addresses </p>
            </div>
         </div>
         <div class="col-md-6 col-sm-6">
            <div class="counter-box number_count_content text-center">
               <i class="fa fa-meetup" aria-hidden="true"></i>
               <div class="our_data_counter_inner">
                  <h2 class="fw-bold pt-3 counter">120</h2>
                  <span>M</span>
               </div>
               <p> Decision Makers Direct Dials </p>
            </div>
         </div>
         <div class="col-md-6 col-sm-6">
            <div class="counter-box number_count_content text-center">
               <i class="fa fa-building" aria-hidden="true"></i>
               <div class="our_data_counter_inner">
                  <h2 class="fw-bold pt-3 counter">120</h2>
                  <span>M</span>
               </div>
               <p> Full Companies Profiles </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!--services section-->
<section class="services_main our_data_service">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6">
            <div class="services_left">
               <img src="{{url('public/assets/images/Usability-testing-pana.png')}}" alt="Image"/ class="img-fluid">
            </div>
         </div>
         <div class="col-md-6">
            <div class="services_right">
               <h2>Our Unique Data</h2>
               <p>Our Unique Data Comes From A Number Of Sources, Including Public Databases, Government Data, And Social Media Feeds.</p>
            </div>
         </div>
      </div>
      <div class="row services_right_main">
         <div class="col-md-6 services_right_inner">
            <div class="services_right">
               <h2>Over 81% <br>Accuracy Rates</h2>
               <p>While Industry Standards Average Between 60% And 70%, It Gives A Startling 81% Data Accuracy Rate To Ensure Highly Accurate Outreach. Check Out Its Data For Yourself With 5 Free Credits Per Month.</p>
            </div>
         </div>
         <div class="col-md-6">
            <div class="services_left">
               <img src="{{url('public/assets/images/Onboarding-amico.png')}}" alt="Image"/ class="img-fluid">
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="services_left">
               <img src="{{url('public/assets/images/Vault-rafiki.png')}}" alt="Image"/ class="img-fluid">
            </div>
         </div>
         <div class="col-md-6">
            <div class="services_right">
               <h2>GDPR Aligned And CCPA Compliant</h2>
               <p>GDPR Aligned And CCPIt's Data Meets Industry Standards And Is ISO 27001 Certified, CCPA Legal, And GDPR Aligned. Make Sure You're Prospecting With Complete Confidence. </p>
            </div>
         </div>
      </div>
      <div class="row services_right_main">
         <div class="col-md-6 services_right_inner">
            <div class="services_right">
               <h2>Third-Party Validated</h2>
               <p>Our Database Has An Extra Degree Of Accuracy Due To Our Network Of Volunteer Contributors Who Evaluate Its Accuracy And Provide Fresh Data. Furthermore, The Thumbs Up And Thumbs Down Functionality Allows Us To Undertake Safeguards, Verifying That Our Data Is Very Accurate And Relevant.</p>
            </div>
         </div>
         <div class="col-md-6">
            <div class="services_left">
               <img src="{{url('public/assets/images/Security-On-rafiki.png')}}" alt="Image"/ class="img-fluid">
            </div>
         </div>
      </div>
   </div>
</section>
<!--data list offer section-->
<section class="data_list_offer">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="main_title text-center">
               <h1 class="main-title-text fw-bold pb-4"> Here is a list of the data that we offer.</h1>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="attribute attribute1">
               <h3>Contact Attributes</h3>
               <p>List Of Contact Attributes</p>
               <ul>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Full name:</b> Full name of contact</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> First name:</b>  First name of contact</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Last name:</b> Last name of contact</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Last name:</b> Last name of contact</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Organization name:</b> Employer name of contact</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Job title:</b> Contact’s title at given company</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Seniority:</b> Contact’s seniority at given company</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Role:</b> Standardized role based on job title</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Emails:</b> List of contact’s accurate emailst</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Phones:</b> List of contact’s accurate phone numbers</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> State:</b> Contact’s current state values</span></li>
               </ul>
            </div>
         </div>
         <div class="col-md-6">
            <div class="attribute">
               <h3>Company Attributes</h3>
               <p>List Of Company Attributes</p>
               <ul>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Name:</b> Company name</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Description:</b>   Description of company</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Domain:</b> Company’s website domaint</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Homepage URL:</b> Company’s website URL valuett</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Founded year:</b> Year company was founded in</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Logo URL:</b> Link to company’s logo file</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Facebook link:</b> Link to company’s Facebook page</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Twitter link:</b> Link to company’s Twitter page</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> LinkedIn link:</b>  Link to company’s LinkedIn page</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Company Location:</b>  Company’s headquarters address</span></li>
                  <li><i class="fa fa-plus" aria-hidden="true"></i><span><b> Country:</b> Company’s headquarters country</span></li>
               </ul>
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