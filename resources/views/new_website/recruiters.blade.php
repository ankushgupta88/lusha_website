@extends('layouts.master2')
@section('content')

<!--banner section-->
    <section class="banner_section_main recruiter_banner">
        <div class="container-fluid">
         <div class="row align-items-center">
             <div class="col-md-6">
                 <div class="banner_text  text-center text-md-start">
                     <span style="color:#f7f9fc;font-size:17px;font-weight: 600;">For Recruiters</span>  
                     <h1 class="hero__title fw-bold"><span style="color: #FFB116;"> Easier</span> reach to the right talent</h1>
                     <img src="{{url('public/assets/images/For-Hero-Section.png')}}" alt="Image"/ class="img-fluid">
                     <p class="hero__subtitle">Allow our unique contact database to locate the exact individual you want with complete satisfaction.</p>
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
                     <img src="{{url('public/assets/images/For-Hero-Section.png')}}" alt="Image"/ class="img-fluid">
                 </div>
             </div>
         </div>
        </div>
    </section>
    
    
       
 <!--services section-->
<section class="services_main service_sale scale_cycle recruiting">
    <div class="container">
        <div class="row">
            <div class="col-md-6 scale_cycle_inner_left">
                <div class="services_left">
                    <img src="{{url('public/assets/images/pexels-buro-millennial.png')}}" alt="Image"/ class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 scale_cycle_inner">
                <div class="services_right">
                    <h2>Recruiting shouldn't <br>be a headache.</h2>
                    <p>With a larger pool of eligible individuals, our platform streamlines the recruiting process. With our connection, you can save time when hiring by enrolling each candidate in the appropriate tracking procedure with the use of integration.</p>
                    <a href="{{url('/plans')}}"><button class="btn more_details py-3">More Detials </button></a>
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
                    <i class="fa fa-id-badge" aria-hidden="true"></i>
                    <h5 class="fw-bold mb-0 py-2  mt-3"> Recruit top talent </h5>
                    <p class="mb-0"> Put in front of the relevant prospects and make the best possible hire.</p>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                     <i class="fa fa-camera" aria-hidden="true"></i>
                    <h5 class="fw-bold mb-0 py-2  mt-3">True connections </h5>
                    <p class="mb-0"> With our up-to-date contact information, you can phone applicants directly.</p>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                    <h5 class="fw-bold mb-0 py-2  mt-3"> Fill vacancies quickly </h5>
                    <p class="mb-0">Better insights save time and money. Increase your hiring and connection rates.</p>
                 </div>
             </div>
         </div>
     </div>
    </section>
    
<!--Testimonial section-->
<section class="testimonial recruiter_testimonial">
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
                    <p>I am excited about all of the opportunities for company to grow. Great platform, highly strong yet still manageable.</p>
                    <h2>Samuel</h2>
                    <span>CO-Founder & CEO</span>
                </div>
            </div>
        </div>
    </div>
</section>
 
 
 
 
 <!--services section-->
<section class="services_main service_sale service_recruiters">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="services_left">
                    <div class="overlay1">
                         <div class="video-content">
                <a href="https://www.youtube.com/embed/VhBl3dHT5SY?feature=oembed?playlist=VhBl3dHT5SY&amp;mute=0&amp;autoplay=0&amp;loop=no&amp;controls=0&amp;start=0&amp;end=" class="ekit-video-popup ekit-video-popup-btn ekit_icon_button glow-btn">
																<i class="fa fa-play-circle-o" aria-hidden="true"></i>										                </a>
            </div>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-6">
                <div class="services_right">
                    <h2>Give each <br>candidate a boost.</h2>
                    <p>By integrating, you can enroll every lead, contact, and applicant in the proper tracking procedure. Use up-to-date data to reach out to the prospects you need.</p>
                    <a href="{{url('/plans')}}"><button class="btn more_details py-3">Check Our Plans</button></a>
                </div>
            </div>
        </div>
    </div>
</section>



<!--Boost Revenue section-->

<section class="boost_revenue">
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
                        <a href="{{url('/plans')}}"><button class="btn more_details py-3">Check Our Plans </button></a>
                    @else
                        <a href="{{url('/plans')}}"><button class="btn more_details py-3">Check Our Plans </button></a>

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