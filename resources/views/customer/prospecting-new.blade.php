@extends('layouts.master')
@section('pageTitle', 'Prospecting-new')
@section('content')
<style>
    .banner_section_main{
    background-color:#0b163f;
    padding: 0 100px;
}
.benefits_content {
    background: #0b163f !important;
}
.main_title h1 {
    color: #071c4d;
    font-size: 2.5rem;
    line-height: 1.2;
    font-weight: 900 !important;
    margin-bottom: 17px;
}
.banner_text {
    color: #fff;
}
.btn.account_btn {
  padding: 0px 40px;
  color: #fff;
  background: #FF023E;
}
.account_btn:hover {
    background: #ffb116;
    color: #fff;
}
.more_details{
  padding: 0px 40px;
  color: #fff;
  background: #ffb116;
}
.more_details:hover{
    background: #FF023E;
    color:#fff;
}
.banner_text h1 {
    font-size: 55px;
    font-weight: 800;
    text-transform: capitalize;
    line-height: 72px;
}
.benefits_content p,.benefits_content h5 {
    color: #fff;
}
.benefits_content i {
    color: #fff;
    font-size: 60px;
}
.services_right {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
}
.services_right h2 {
    font-size: 35px;
    font-weight: bold;
    line-height: 50px;
}
.services_right p {
    font-size: 18px;
    color: #54595f;
}
.number_counter_section {
    background: #f7f9fc;
}
.number_count_content {
    background: #fff;
    margin: 10px;
    padding: 55px 0px 55px 0px;
}
.number_count_content h2 {
    margin: 0;
    padding: 0 !important;
    font-size:38px;
}
.number_count_content p {
    margin-bottom: 0;
}
section.number_counter_section {
    padding: 100px 0;
}
.number_count_content p {
    margin-bottom: 0;
    color: #54595f;
    font-size: 17px;
}
section.sales_main {
    padding: 150px 0;
}
.sales_icon {
    color: #fff;
    font-size: 28px;
    text-align: center;
    margin-right: 20px;
    padding: 5px 0;
}
.sales_left h2 {
    font-size: 40px;
    font-weight: bold;
}
.sales_left p {
    font-size: 17px;
    color: #54595f;
}
.sales_text h2 {
    font-size: 22px;
}
.sales_left_content .col-md-10 {
    padding: 0;
}
.sales_left_content {
    padding-top: 10px;
}
.sales_left_content .row {
    padding-top: 23px;
}
.banner_text img{
    display:none;
}
/**************Media Query****************/
@media only screen and (max-width: 1180px) {
.banner_section_main {
    padding: 30px 100px;
}
}
@media only screen and (max-width: 1024px) {
    .banner_text h1 {
    font-size: 40px;
    line-height: 50px;
}
}
@media only screen and (max-width: 991px) {
.benefits-section .col-lg-3 {
    margin-bottom: 20px;
}
.services_right h2 {
    font-size: 25px;
}
.services_right p,.benefits_content p {
    font-size: 15px;
}
.number_count_content {
    margin: 0;
}
.banner_text h1 {
    font-size: 32px;
    line-height: 35px;
}
.sales_left h2 {
    font-size: 32px;
}
.sales_text h2 {
    font-size: 22px !important;
}
.sales_icon {
    margin-right: 0;
    padding: 0px 0;
}
}
@media only screen and (max-width: 767px) {
.row.services_right_main {
    display: flex;
}
.services_right_inner {
    order: 2;
}
section.services_main {
    padding-bottom: 50px;
}
.block-space-bottom {
    padding-bottom: 0px;
}
.number_count_content {
    margin-bottom: 25px;
}
section.sales_main  {
    padding: 50px 0;
}
section.number_counter_section {
    padding: 70px 0 50px 0;
}
.banner_text img{
    display:block;
}
.banner-img img{
    display:none;
}
}
@media only screen and (max-width: 525px) {
.banner_section_main {
    padding: 30px 0;
}
.banner_text h1 {
    font-size: 29px;
}
.main_title h1 {
    font-size: 29px;
}
.sales_left h2 {
    font-size: 29px;
}
.sales_icon {
    font-size: 20px;
}
}
</style>
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
                      </div> 
                    @else
                     <div class="d-flex position-relative">
                        <input class="form-control me-2 py-3" type="search" placeholder="Enter your work email" aria-label="Search">
                        <a href="{{url('/register')}}"><button class="btn submit-btn py-3">Start up for free</button></a>
                      </div>
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
                    <a href="#"><button class="btn more_details py-3">More Details</button></a>
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
            <h2 class="fw-bold pt-3 counter">80M</h2>
                <p> Email Addresses </p>
            </div>
        </div>
        
        <div class="col-md-3 col-sm-6">
            <div class="counter-box number_count_content text-center">  
            <h2 class="fw-bold pt-3 counter">120M</h2>
                <p> Business Profiles </p>
            </div>
        </div>
              
              <div class="col-md-3 col-sm-6">
                  <div class="counter-box number_count_content text-center">
                      <h2 class="fw-bold pt-3 counter">25M</h2>
                      <p> Company Profiles </p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="counter-box number_count_content text-center">
                      <h2 class="fw-bold pt-3 counter">75M</h2>
                      <p> Direct Dials </p>
                  </div>
              </div>
          </div>
       </div>
   </section>
   
   <!--increase sales section-->
   <section class="sales_main">
       <div class="container">
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
                                   <h2>Filter any lead data</h2>
                                   <p>Utilize our industry, geography, experience level, and mobile filters to narrow down your results.</p>
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
                                   <h2>Filter any lead data</h2>
                                   <p>Utilize our industry, geography, experience level, and mobile filters to narrow down your results.</p>
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
