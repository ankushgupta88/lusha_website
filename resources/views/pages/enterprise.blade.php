@extends('layouts.master2')
@section('content')


<!--banner section-->
    <section class="banner_section_main">
        <div class="container-fluid">
         <div class="row align-items-center">
             <div class="col-md-6">
                 <div class="banner_text  text-center text-md-start">
                     <h1 class="hero__title fw-bold"><span style="color: #FFB116;"> Best</span> intelligence solution for sales</h1>
                     <img src="{{url('public/assets/images/prospecting_1.png')}}" alt="Image"/ class="img-fluid">
                     <p class="hero__subtitle">This service provides correct direct dials, contact numbers, and emails to help you increase sales with less work and expand in the market.</p>
                     <div class="banner-email mt-4">
                    @if(Auth::user())
                      <div class="my-account-btn">
                        <a href="{{url('/dashboard')}}"><button class="btn account_btn py-3">Start For Free</button></a>
                      
                    @else
                      <a href="{{url('/register')}}"><button class="btn py-3 get_start">Start For Free</button></a>
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
    

    
<!--services section-->
<section class="services_main services_enterprise">
    <div class="container-fluid">
        <div class="row">
            <div class="service_caption">
                <h2>Expand your market reach</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="services_left">
                    <img src="{{url('public/assets/images/Remote-team-amico.png')}}" alt="Image"/ class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="services_right">
                    <h2>Book qualifying meetings</h2>
                    <p>With direct contact data, you can find the appropriate individuals and find the correct facts about any prospect you’re searching for. Using our powerful search tool, you can find leads that satisfy your requirements and discover new target accounts. </p>
                    <!--<a href="#"><button class="btn more_details py-3">More Details</button></a>-->
                </div>
            </div>
        </div>
        <div class="row services_right_main">
            <div class="col-md-6 services_right_inner">
                <div class="services_right">
                    <h2>Get More Deals</h2>
                    <p>Stop depending on other members of your team to feed your funnel with qualified leads. Find fresh possibilities and opportunities with target-like audiences on your own.    Locate any decision maker across the funnel to close faster and achieve your targets.</p>
                    <!--<a href="{{url('/site-integrations')}}"><button class="btn more_details py-3">More Details</button></a>-->
                </div>
            </div>
            <div class="col-md-6">
                <div class="services_left">
                    <img src="{{url('public/assets/images/Speech-to-text-pana.png')}}" alt="Image"/ class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="services_left">
                    <img src="{{url('public/assets/images/Mobile-feed-pana.png')}}" alt="Image"/ class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="services_right">
                    <h2>Leader's <br>management for team</h2>
                    <p>With enterprise-grade team management, you can easily create a more accessible, certified, and powerful funnel. Increase overall productivity and identify income growth possibilities and easily control credit use. Distribute credits where they are most needed and limit credits at any point to get the most out of our tool.</p>
                    <!--<a href="#"><button class="btn more_details py-3">More Details</button></a>-->
                </div>
            </div>
        </div>
    </div>
</section>


<!--benefits section-->
    <section class="benefits-section benefits_enterprise block-space block-space-bottom">
     <div class="container-fluid">
         <div class="row pt-4 pt-md-5">
             <div class="col-lg-4">
                 <div class="benefits_contents mb-3 mb-md-0 text-center p-4 heigth-100 bg-white">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    <h5 class="fw-bold mb-0 py-2 mt-3"> API to enrich data.</h5>
                    <p class="mb-0 px-4"> Our API automatically fills your whole database in bulk, either through technical integration or Zapier, and many more methods are available. </p>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="benefits_contents mb-3 mb-md-0 text-center p-4 heigth-100 bg-white">
                   <i class="fa fa-wrench" aria-hidden="true"></i>
                    <h5 class="fw-bold mb-0 py-2  mt-3"> Integrate with your tools </h5>
                    <p class="mb-0 px-4"> Immediately automate your workflow by integrating with your tools. Transfer real – time actionable prospect data to your tools with a few simple clicks.</p>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="benefits_contents mb-3 mb-md-0 text-center p-4 heigth-100 bg-white">
                   <i class="fa fa-lock" aria-hidden="true"></i>
                    <h5 class="fw-bold mb-0 py-2  mt-3"> Trusted data </h5>
                    <p class="mb-0 px-4">Our data is committed to and in accordance with the GDPR and CCPA regulations. Work in complete accordance with all applicable rules and regulations.</p>
                 </div>
             </div>
         </div>
     </div>
    </section>



<!--Sign up and expand your horizons section-->

<section class="boost_revenue">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="revenue_content horizons">
                    <i class="fa fa-database" aria-hidden="true"></i>
                    <h2>Sign up and expand your horizons</h2>
                    <p>Obtain the most up-to-date prospect data.</p>
                    <div class="revenue_button">
                      @if(Auth::user())
                        <a href="{{url('/dashboard')}}"><button class="btn more_details py-3">Get Started</button></a>
                    @else
                        <a href="{{url('/register')}}"><button class="btn more_details py-3">Get Started</button></a>

                    @endif
                </div>
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

   
   
 
  
  
  <section class="services_main services_enterprise services_enterprise_lst">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="services_left">
                    <img src="{{url('public/assets/images/Profiling-amico.png')}}" alt="Image"/ class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="services_right">
                    <h2>No-Hassle Hiring</h2>
                    <p>Our no-hassle setup saves you time and b egin utilising our platform to find more quality leads right immediately. You’ll also work with a professional account manager who is devoted to your success from the start.</p>
                    <!--<a href="#"><button class="btn more_details py-3">More Details</button></a>-->
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
