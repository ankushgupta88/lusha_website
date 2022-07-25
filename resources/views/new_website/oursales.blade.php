@extends('layouts.master')
@section('content')

<!--banner section-->
    <section class="banner_section_main our_sales">
        <div class="container-fluid">
         <div class="row align-items-center">
             <div class="col-md-6">
                 <div class="banner_text  text-center text-md-start">
                     <h1 class="hero__title fw-bold"> <span style="color: #FFB116;"> Calling</span> to<br>
enhance your sales in 2022</h1>
                     <img src="{{url('public/assets/images/Calling-rafiki.png')}}" alt="Image"/ class="img-fluid">
                     <p class="hero__subtitle">Access to thousands of direct dials to help you contact the appropriate decision maker and take transactions forward.</p>
                     <div class="banner-email mt-4">
                    @if(Auth::user())
                      <div class="my-account-btn">
                        <a href="{{url('/plans')}}"><button class="btn account_btn py-3">Get Started </button></a>
                      
                    @else
                      <a href="{{url('/plans')}}"><button class="btn py-3 get_start">Get Started</button></a>
                    @endif 
                    </div> 
                 </div>
                 
             </div>
             <div class="col-md-6">
                 <div class="banner-img">
                     <img src="{{url('public/assets/images/Calling-rafiki.png')}}" alt="Image"/ class="img-fluid">
                 </div>
             </div>
         </div>
        </div>
    </section>
    
  
   
 <!--services section-->
<section class="services_main service_sale scale_cycle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 scale_cycle_inner_left">
                <div class="services_left">
                    <img src="{{url('public/assets/images/pexels-kampus-production.jpg')}}" alt="Image"/ class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 scale_cycle_inner">
                <div class="services_right">
                    <h2>Bost your sales cycle in 2022</h2>
                    <p>Use our powerful filters to locate prospects that meet your qualifying requirements and save time with reliable B2B data.</p>
                    <a href="{{url('/plans')}}"><button class="btn more_details py-3">Plans Detials </button></a>
                </div>
            </div>
        </div>
    </div>
</section>

  
    
    
    <!--benefits section-->
    <section class="benefits-section benefits-section3 sale_benifits block-space block-space-bottom">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-4">
                 <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <h5 class="fw-bold mb-0 py-2  mt-3"> Prospect </h5>
                    <p class="mb-0"> Find out who your ideal customers are and who is standing in your way of a contract signed.</p>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                     <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    <h5 class="fw-bold mb-0 py-2  mt-3">New opportunities </h5>
                    <p class="mb-0"> Find new prospects and target companies. Qualify your funnel and achieve your goal more quickly.</p>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                    <i class="fa fa-cube" aria-hidden="true"></i>
                    <h5 class="fw-bold mb-0 py-2  mt-3"> Front of any CEO </h5>
                    <p class="mb-0">Go to any company’s website to acquire richer personnel data on the time and communicate with planners.</p>
                 </div>
             </div>
         </div>
     </div>
    </section>
    
<!--Testimonial section-->
<section class="testimonial sale_testimonial">
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
                    <p>Amazing service, makes your job a lot simpler if you want to improve. They provide really efficient services. Definitely recommended</p>
                    <h2>Reggie</h2>
                    <span>Assistent Manager</span>
                </div>
            </div>
        </div>
    </div>
</section>
 
 
 
 
 <!--services section-->
<section class="services_main service_sale">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="services_left">
                    <img src="{{url('public/assets/images/Profiling-rafiki.png')}}" alt="Image"/ class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="services_right">
                    <h2>Give each <br>prospect a boost.</h2>
                    <p>Streamline your sales cycle by saving better accurate prospect lists immediately to your CRM. Use our up-to-date data to improve score and identify every decision maker throughout the pipeline.</p>
                    <a href="#"><button style="background:#f71966;" class="btn more_details py-3">More Details</button></a>
                </div>
            </div>
        </div>
    </div>
</section>



<!--Boost Revenue section-->

<section class="boost_revenue">
    <div class="container">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="revenue_content">
                    <h2>Boost your revenue growth</h2>
                    <p>Our Premium and Enterprise plans are designed for scalability and your specific requirements.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="revenue_button">
                      @if(Auth::user())
                        <a href="{{url('/plans')}}"><button class="btn more_details py-3">Check Our Plans</button></a>
                    @else
                        <a href="{{url('/plans')}}"><button class="btn more_details py-3">Check Our Plans</button></a>

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

@endsection