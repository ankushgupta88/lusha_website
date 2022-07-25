@extends('layouts.master2')
@section('content')


<!--banner section-->
    <section class="banner_section_main about_banner">
        <div class="container-fluid">
         <div class="row align-items-center">
             <div class="col-9">
                 <div class="banner_text  text-center text-md-start">
                     <h1 class="hero__title fw-bold">Our story</h1>
                     <p class="hero__subtitle">We are a group of specialists dedicated to making the go-to-market process quicker by productizing basic, B2B SaaS solutions.</p>
                     <div class="banner-email mt-4">
                  
                      <div class="my-account-btn">
                        <a href="{{url('/contact')}}"><button class="btn account_btn py-3">Contact Us </button></a>
                      </div> 
                  
                 </div>
                 </div>
             </div>
         </div>
        </div>
    </section>
    

    
<!--services section-->
<section class="services_main about_service">
    <div class="container-fluid">
        <div class="row services_right_main">
            <div class="col-md-6 services_right_inner">
                <div class="services_right">
                    <h2>About Us</h2>
                    <p>Our prospecting platform, web extension, and API enable sales professionals to identify, engage, and close prospects. Our data is committed to and compliant with GDPR and CCPA regulations. You can use our tool in conjunction with other tools to obtain contact information, such as HubSpot, Salesforce, Pipedrive, Outreach, SalesLoft, and Zoho..</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="services_left">
                    <img src="{{url('public/assets/images/Speech-to-text-pana.png')}}" alt="Image"/ class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>



<!--testimonial section-->
<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial_caption">
                    <h2>Team of Our Professionals</h2>
                    <p>We are focused on delivering the ideal user experience possible</p>
                </div>
            </div>
        </div>
        <div class="row">
            @if(!empty($professionals))
            @foreach($professionals as $key=>$value)
            <div class="col-4">
                <div class="testimonial_inner">
                    <div class="testimonial_inner_img">
                        <img src="{{asset('public/upload/professional/'.$value['image_file'])}}" alt="Image"/ class="img-fluid">
                    </div>
                    <div class="testimonial_inner_content">
                        <h2>{{$value['name']}}</h2>
                        <span>{{$value['designation']}}</span>
                       <p>{!! $value['description'] !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            
          
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
