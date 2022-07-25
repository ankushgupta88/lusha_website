@extends('layouts.master2')
@section('content')


<!--banner section-->
    <section class="banner_section_main marketing_main">
        <div class="container-fluid">
         <div class="row align-items-center">
             <div class="col-md-6">
                 <div class="banner_text  text-center text-md-start">
                     <span style="color:#f7f9fc;font-size:17px;font-weight: 600;">Marketing</span>
                     <h1 class="hero__title fw-bold">Start building your <span style="color: #FFB116;">funnel</span> from the beginning.</h1>
                     <img src="{{url('public/assets/images/Mobile-Marketing-pana.png')}}" alt="Image"/ class="img-fluid">
                     <p class="hero__subtitle">To produce searing qualified leads quickly, tap into millions of correct direct calls and emails.</p>
                     <div class="banner-email mt-4">
                    @if(Auth::user())
                      <div class="my-account-btn find_talent">
                        <a href="{{url('/dashboard')}}"><button class="btn account_btn py-3">Find Talent </button></a>
                      </div> 
                    @else
                      <div class="my-account-btn find_talent">
                        <a href="{{url('/register')}}"><button class="btn account_btn py-3">Find Talent </button></a>
                      </div>
                    @endif 
                 </div>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="banner-img">
                     <img src="{{url('public/assets/images/Mobile-Marketing-pana.png')}}" alt="Image"/ class="img-fluid">
                 </div>
             </div>
         </div>
        </div>
    </section>
    
<!--services section-->
<section class="services_main services_main3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="services_left services_left2">
                    <img src="{{url('public/assets/images/Filter-pana2.png')}}" alt="Image"/ class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="services_right">
                    <h2>Quickly identify qualified marketing contacts</h2>
                    <p>Use our data collected from various sources and actionable insights to find, connect, and engage with more qualified marketing contacts.</p>
                    <a href="#"><button class="btn more_details py-3">Find Talent</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
    
    
<!--benefits section-->
    <section class="benefits-section benefits-section3 block-space block-space-bottom">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-4">
                 <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <h5 class="fw-bold mb-0 py-2  mt-3"> Engage with sales staff. </h5>
                    <p class="mb-0"> Provide your sales staff with SQLs that have the best conversion potential. Also, make your task easier. </p>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                    <i class="fa fa-database" aria-hidden="true"></i>
                    <h5 class="fw-bold mb-0 py-2  mt-3"> Grow a database </h5>
                    <p class="mb-0"> Find new marketing connections who correspond to your top-performing target accounts.</p>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                    <i class="fa fa-cube" aria-hidden="true"></i>
                    <h5 class="fw-bold mb-0 py-2  mt-3"> Target your campaigns </h5>
                    <p class="mb-0"> Utilize our actionable data to provide more successful inbound, outbound, and ABM marketing to the right people.</p>
                 </div>
             </div>
         </div>
     </div>
    </section>
    


<!--Testimonial section-->
<section class="testimonial marketing_testimonial">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="testimonial_img">
                    <img src="{{url('public/assets/images/team-7.jpg')}}" alt="Image"/ class="img-fluid">
                </div>
            </div>
            <div class="col-md-9">
                <div class="testimonial_content">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>This is a market game changer. It is simple, quick, and reliable, and most importantly, it is simple to use. Invest a tiny sum; it will be well worth it.</p>
                    <h2>George</h2>
                    <span>Manager</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!--services section-->
<section class="services_main services_main3 services_main4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="services_left services_left2">
                    <img src="{{url('public/assets/images/Profiling-amico.png')}}" alt="Image"/ class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="services_right">
                    <h2>Give each <br>prospect a boost.</h2>
                    <p>Streamline your sales cycle by saving better accurate prospect lists immediately to your CRM. Use our up-to-date data to improve score and identify every decision maker throughout the pipeline.</p>
                    <a href="#"><button class="btn more_details py-3">Find Talent</button></a>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Boost Revenue section-->

<section class="boost_revenue marketing_boost_revenue">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="revenue_content">
                    <h2>Boost your revenue growth</h2>
                    <p>Our Premium and Enterprise plans are designed for scalability and your specific requirements.</p>
                </div>
            </div>
            <div class="col-md-5">
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
</section>

 
<!--Brand section-->

<section class="brand_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul>
                    <li><img src="{{url('public/assets/images/dropbox.png')}}" alt="Image"/ class="img-fluid"></li>
                    <li><img src="{{url('public/assets/images/zendesck.png')}}" alt="Image"/ class="img-fluid"></li>
                    <li><img src="{{url('public/assets/images/aircall.png')}}" alt="Image"/ class="img-fluid"></li>
                    <li><img src="{{url('public/assets/images/microsoft.png')}}" alt="Image"/ class="img-fluid"></li>
                    <li><img src="{{url('public/assets/images/airbnb.png')}}" alt="Image"/ class="img-fluid"></li>
                </ul>
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
