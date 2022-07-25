@extends('layouts.master')
@section('content')
<style>
   canvas {
   display: block;
   vertical-align: bottom;
   }
   #particleses-js {
   position: relative;
   width: 100%;
   height: 100%;
   }
   canvas {
   display: block;
   vertical-align: bottom;
   }
   #particless-js {
   position: relative;
   width: 100%;
   height: 700px;
   }
   #particleses-js .row {
   position: absolute;
   width: 100%;
   padding: 0 20%;
   }
   #particleses-js canvas.particles-js-canvas-el {
   height: 400px !important;
   }
</style>




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<section class="find_details">
   <div class="container">
      <div class="row">
         <div class="col-lg-3">
            <div class="contact_image_left">
               <ul class="tt-logo-list-two align-left">
                  <li data-bs-original-title="Brand Name">
                     <div class="tt-logo-list-two__item">
                        <img src="public/assets/images/brand_name1.png" alt="Brand Name" width="40">
                     </div>
                     <!-- /.tt-logo-list__item -->
                  </li>
                  <li data-bs-original-title="Brand Name">
                     <div class="tt-logo-list-two__item">
                        <img src="public/assets/images/brand_name2.png" alt="Brand Name" width="40">
                     </div>
                     <!-- /.tt-logo-list__item -->
                  </li>
                  <li data-bs-original-title="Brand Name">
                     <div class="tt-logo-list-two__item">
                        <img src="public/assets/images/brand_name3.png" alt="Brand Name" width="40">
                     </div>
                     <!-- /.tt-logo-list__item -->
                  </li>
                  <li data-bs-original-title="Brand Name">
                     <div class="tt-logo-list-two__item">
                        <img src="public/assets/images/brand_name4.png" alt="Brand Name" width="40">
                     </div>
                     <!-- /.tt-logo-list__item -->
                  </li>
                  <li data-bs-original-title="Brand Name">
                     <div class="tt-logo-list-two__item">
                        <img src="public/assets/images/brand_name5.png" alt="Brand Name" width="40">
                     </div>
                     <!-- /.tt-logo-list__item -->
                  </li>
                  <li data-bs-original-title="Brand Name">
                     <div class="tt-logo-list-two__item">
                        <img src="public/assets/images/brand_name6.png" alt="Brand Name" width="40">
                     </div>
                     <!-- /.tt-logo-list__item -->
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="contact_text">
               <h2>Find the contact details of any professional</h2>
               <p>Use our <strong>chrome extension</strong> and extract contact details</p>
               @if(Auth::user())
               <button type="button"><a href="{{url('/dashboard')}}">Get started today<i class="fa fa-arrow-right" aria-hidden="true"></i></a></button>
               @else
               <button type="button"><a href="{{url('/register')}}">Get started today<i class="fa fa-arrow-right" aria-hidden="true"></i></a></button>
               @endif
            </div>
         </div>
         <div class="col-lg-3">
            <div class="contact_image_left contact_image_right">
               <ul class="tt-logo-list-two align-left">
                  <li data-bs-original-title="Brand Name">
                     <div class="tt-logo-list-two__item">
                        <img src="public/assets/images/brand_name7.png" alt="Brand Name" width="40">
                     </div>
                     <!-- /.tt-logo-list__item -->
                  </li>
                  <li data-bs-original-title="Brand Name">
                     <div class="tt-logo-list-two__item">
                        <img src="public/assets/images/brand_name8.png" alt="Brand Name" width="40">
                     </div>
                     <!-- /.tt-logo-list__item -->
                  </li>
                  <li data-bs-original-title="Brand Name">
                     <div class="tt-logo-list-two__item">
                        <img src="public/assets/images/brand_name9.png" alt="Brand Name" width="40">
                     </div>
                     <!-- /.tt-logo-list__item -->
                  </li>
                  <li data-bs-original-title="Brand Name">
                     <div class="tt-logo-list-two__item">
                        <img src="public/assets/images/brand_name10.png" alt="Brand Name" width="40">
                     </div>
                     <!-- /.tt-logo-list__item -->
                  </li>
                  <li data-bs-original-title="Brand Name">
                     <div class="tt-logo-list-two__item">
                        <img src="public/assets/images/brand_name11.png" alt="Brand Name" width="40">
                     </div>
                     <!-- /.tt-logo-list__item -->
                  </li>
                  <li data-bs-original-title="Brand Name">
                     <div class="tt-logo-list-two__item">
                        <img src="public/assets/images/brand_name12.png" alt="Brand Name" width="40">
                     </div>
                     <!-- /.tt-logo-list__item -->
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="dashboard_overview">
   <div class="container">
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="dashboard_inner">
               <img src="public/assets/images/dashboard.jpg" alt="Dashboard Overview">
               <ul>
                  <li>
                     <div class="inner">
                        <img src="public/assets/images/shipment.jpg" alt="Dashboard Overview">
                     </div>
                  </li>
                  <li>
                     <div class="inner">
                        <img src="public/assets/images/Integration.png" alt="Dashboard Overview">
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-md-2"></div>
      </div>
   </div>
</section>
<!--Particle Moving section-->
<section class="moving_particle">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div id="particless-js">
               <div class="moving_canvas_content">
                  <div class="row canvas_caption" >
                     <div class="col-12">
                        <h2>Find, target, and connect with more prospects</h2>
                     </div>
                  </div>
                  <div class="row canvas_inner">
                     <div class="col-md-4">
                        <div class="canvas_content">
                           <h3>Enrich your lists</h3>
                           <p>Enrich your lists with a single click and create contact lists to save in bulk in our DB.</p>
                           <button type="button">Read More Details <i class="fa fa-arrow-right" aria-hidden="true"></i> </button>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="canvas_content">
                           <h3>Prospecting</h3>
                           <p>You can find the prospects quickly on LinkedIn, Gmail, and many other platforms.</p>
                           <button type="button">Read More Details <i class="fa fa-arrow-right" aria-hidden="true"></i> </button>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="canvas_content">
                           <h3>Team management</h3>
                           <p>Admins can simply assign credits to team members and control credit usage.</p>
                           <button type="button">Read More Details <i class="fa fa-arrow-right" aria-hidden="true"></i> </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--brand section-->
<section class="home_brand">
   <div class="container">
      <div class="row row-cols-lg-5">
         <div class="col">
            <img src="public/assets/images/uber1.png" alt="Brand Logo">
         </div>
         <div class="col">
            <img src="public/assets/images/sis.png" alt="Brand Logo">
         </div>
         <div class="col">
            <img src="public/assets/images/airbnb.png" alt="Brand Logo">
         </div>
         <div class="col">
            <img src="public/assets/images/microsoft.png" alt="Brand Logo">
         </div>
         <div class="col">
            <img src="public/assets/images/amazon.png" alt="Brand Logo">
         </div>
      </div>
   </div>
</section>
<section class="home_brand home_brand_media">
   <div class="container">
      <div class="row">
         <div class="col-sm-6 col-12">
            <img src="public/assets/images/uber1.png" alt="Brand Logo">
         </div>
         <div class="col-sm-6 col-12">
            <img src="public/assets/images/sis.png" alt="Brand Logo">
         </div>
         <div class="col-sm-6 col-12">
            <img src="public/assets/images/airbnb.png" alt="Brand Logo">
         </div>
         <div class="col-sm-6 col-12">
            <img src="public/assets/images/microsoft.png" alt="Brand Logo">
         </div>
         <div class="col-sm-6 col-12">
            <img src="public/assets/images/amazon.png" alt="Brand Logo">
         </div>
      </div>
   </div>
</section>
<!--video section-->
<section class="home_video">
   <div class="container">
      <div class="row video_inner_home">
         <div class="col-md-6">
            <div class="video_content video_content_left">
               <h3>Prospecting platform</h3>
               <h2>Improve prospecting</h2>
               <p>In seconds, use any <strong>search criteria</strong> to retrieve hundreds of verified emails, work phone numbers, and direct dials for your clients. <strong>For companies</strong>,  enhance the systems with a detailed company profile covering more information.</p>
               <a href="{{url('/prospecting-platform')}}"><button type="button">Start Prospecting <i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
            </div>
         </div>
         <div class="col-md-6">
            <div class="video_main">
               <!--<div class="embed-responsive embed-responsive-16by9">-->
               <!--   <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>-->
               <!--</div>-->
               <div class="overlay"></div>
               <a href="https://www.youtube.com/embed/VhBl3dHT5SY?feature=oembed?playlist=VhBl3dHT5SY&mute=0&autoplay=0&loop=no&controls=0&start=0&end=""><i class="fa fa-play-circle" aria-hidden="true"></i></a>
               
            </div>
            
            
         </div>
      </div>
      <div class="row video_inner_home">
         <div class="col-md-6">
            <div class="video_main">
               <!--<div class="embed-responsive embed-responsive-16by9">-->
               <!--   <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>-->
               <!--</div>-->
               <div class="overlay"></div>
               <a href="https://www.youtube.com/embed/VhBl3dHT5SY?feature=oembed?playlist=VhBl3dHT5SY&mute=0&autoplay=0&loop=no&controls=0&start=0&end=""><i class="fa fa-play-circle" aria-hidden="true"></i></a>
               
            </div>
         </div>
         <div class="col-md-6">
            <div class="video_content">
               <h3>Chrome extension</h3>
               <h2>Use our extension</h2>
               <p>Obtain accurate <strong>direct calls, emails</strong> and other contacts in seconds to engage with the <strong>correct prospects</strong>. Find contacts by adding our extension to your <strong>Chrome browser</strong> to prospect faster.</p>
               <a href="{{url('/extension')}}"><button type="button">Get Our Extension <i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--service section-->
<section class="home_service">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="video_content">
               <h3>Use our API</h3>
               <h2>Enhance your systems</h2>
               <p>Our <b>API</b> makes it simple to supplement any database, system, or app with correct <b>B2B</b> connections and business data. <b>For companies</b>, enhance the systems with a detailed <b>company profile</b> covering more information. And <b>for individuals</b>, add correct prospect contact data to your system, and make your work <b>simpler</b>. </p>
               <a href="{{url('/site-integrations')}}"><button type="button">Start Integration <i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
               
            </div>
         </div>
         <div class="col-md-6">
            <div class="video_main service_home_inner">
               <img src="public/assets/images/Developer-activity-bro.png" alt="Dashboard Overview">
            </div>
         </div>
      </div>
   </div>
</section>
<!--customer get result section-->
<section class="customer_result">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="video_content customer_result_caption">
               <h2>Our Customers Get Results</h2>
               <p>Connect with prospects, convert more leads, and boost your profits.</p>
            </div>
         </div>
      </div>
      <div class="row mt-5">
         <div class="col-md-4">
            <div class="customer_result_inner">
               <div class="customer_result_icon" style="background: #F71966;"><i class="fa fa-building" aria-hidden="true"></i></div>
               <h2>Reach 130M+ prospects</h2>
               <p>Phone is the best approach to reach out to your prospects directly without paying attention.</p>
               <button type="button">Read More Details <i class="fa fa-arrow-right" aria-hidden="true"></i> </button>
            </div>
         </div>
         <div class="col-md-4">
            <div class="customer_result_inner">
               <div class="customer_result_icon" style="background: #175cff;"><i class="fa fa-file-o" aria-hidden="true"></i></div>
               <h2>Highest accuracy rate</h2>
               <p>Our accuracy is the highest in the market, providing accurate phone numbers, emails.</p>
               <button type="button">Read More Details <i class="fa fa-arrow-right" aria-hidden="true"></i> </button>
            </div>
         </div>
         <div class="col-md-4">
            <div class="customer_result_inner">
               <div class="customer_result_icon" style="background: #ffb116;"><i class="fa fa-address-book-o" aria-hidden="true"></i></div>
               <h2>Our trusted data</h2>
               <p>Our data is committed to and in accordance with the GDPR and CCPA regulations.</p>
               <button type="button">Read More Details <i class="fa fa-arrow-right" aria-hidden="true"></i> </button>
            </div>
         </div>
      </div>
   </div>
</section>
<!--verified email section-->
<section class="verified_email_home">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="email_home_image">
               <img src="public/assets/images/WhatsApp-Image.jpeg" alt="Dashboard Overview">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="video_content">
               <h3>Use our API</h3>
               <h2>Verified emails</h2>
               <p>Obtain <b>verified email</b> addresses directly from <b>social</b> media profiles. It's time to go social with your email. We have a huge number of <b>email addresses</b>, however we guarantee that all of them have been verified using our most <b>latest technology</b>. </p>
               <ul>
                  <li>Verified email addresses</li>
                  <li>100% accurate email list</li>
                  <li>Latest methodology verify the emails</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="counter home_counter">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div id="particleses-js">
               <div class="row caption_row">
                  <div class="col-12">
                     <h3>Trusted by over 1M sales users worldwide</h3>
                     <p>There are<strong> billions</strong> of experts <strong>accessible</strong> across the world.</p>
                  </div>
               </div>
               <div class="row counter_row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="counter-box number_count_content text-center">
                        <h2 class="fw-bold pt-3 counter">80 M +</h2>
                        <p> Email Addresses </p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="counter-box number_count_content text-center">
                        <h2 class="fw-bold pt-3 counter">120 M +</h2>
                        <p> Business Profiles </p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="counter-box number_count_content text-center">
                        <h2 class="fw-bold pt-3 counter">25 M +</h2>
                        <p> Company Profiles </p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="counter-box number_count_content text-center">
                        <h2 class="fw-bold pt-3 counter">75 M +</h2>
                        <p> Direct Dials </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--testimonial section-->
<section class="home_testimonial">
   <div class="container">
       <div class="home_testimonial_caption">
           <h5>Reviews</h5>
           <h2>What our clients say</h2>
       </div>
      <div class="row">
         <div col-12>
            <div class="home_testimonial_inner">
               <div class="owl-carousel owl-theme">
                  <div class="item">
                     <div class="testimonial_caption">
                        <img src="public/assets/images/test_img1.png" alt="Dashboard Overview">
                        <div class="testimonial_caption_content">
                           <h4>Abigail </h4>
                           <h5>Manager</h5>
                        </div>
                     </div>
                     <div class="testimonial_content">
                        <p>It is simply incredible; it has everything you could possibly want to get started and grow. You can obtain whatever additional capability you want. Yes, it's a funnel for their service, and it's fantastic for newcomers.</p>
                     </div>
                     <div class="testimonial_rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                     </div>
                  </div>
                  <div class="item">
                     <div class="testimonial_caption">
                        <img src="public/assets/images/test_img2.png" alt="Dashboard Overview">
                        <div class="testimonial_caption_content">
                           <h4>Johan Mike  </h4>
                           <h5>Founder and CEO</h5>
                        </div>
                     </div>
                     <div class="testimonial_content">
                        <p>Their customer service is really efficient and quick. It is a part of our workflow, and it assists us in reducing our work. The customer service is excellent. I recommend it to all businesses for the use of their tools.</p>
                     </div>
                     <div class="testimonial_rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                     </div>
                  </div>
                  <div class="item">
                     <div class="testimonial_caption">
                        <img src="public/assets/images/test_img3.png" alt="Dashboard Overview">
                        <div class="testimonial_caption_content">
                           <h4>Isabella</h4>
                           <h5>Company Owner & Developer</h5>
                        </div>
                     </div>
                     <div class="testimonial_content">
                        <p>It's simple to use, with detailed instructions. They have excellent technical support and billing staff. In my opinion, they are quick and responsive. You can do anything you need to do in order for your business to develop.</p>
                     </div>
                     <div class="testimonial_rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--integration section-->
<section class="home_integration">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="home_integration_content">
               <div class="video_content">
                  <h2>Integrations</h2>
                  <p>You can integrate with many tools (HubSpot, Salesforce, Pipedrive, Outreach, SalesLoft, Zoho ) and also we are working to add more.</p>
                  <a href="{{url('/site-integrations')}}"><button type="button">More Details <i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="home_integration_icon">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="home_integration_img">
                        <img src="public/assets/images/Icon-02.png" alt="Dashboard Overview">
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="home_integration_img">
                        <img src="public/assets/images/icon-salesloft.png" alt="Dashboard Overview">
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="home_integration_img">
                        <img src="public/assets/images/icon-pipedrive.png" alt="Dashboard Overview">
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="home_integration_img">
                        <img src="public/assets/images/icon-gmail.png" alt="Dashboard Overview">
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="home_integration_img">
                        <img src="public/assets/images/icon-zapier-2.png" alt="Dashboard Overview">
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="home_integration_img">
                        <img src="public/assets/images/icon-outlook-1.png" alt="Dashboard Overview">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Get Free Support section-->
<section class="boost_revenue home_boost_revenue">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="revenue_content horizons client_appriciate_content">
               <h3>Get Free Support</h3>
               <h2>Our clients appreciate us.</h2>
               <p>Helping thousands of businesses in their growth</p>
               <div class="revenue_button client_appriciate">
                  @if(Auth::user())
                  <a href="{{url('/contact')}}"><button class="btn more_details py-3">Contact Us</button></a>
                  @else
                  <a href="{{url('/contact')}}"><button class="btn more_details py-3">Contact Us</button></a>
                  @endif
               </div>
            </div>
         </div>
      </div>
   </div>
</section>







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
   //   moving particle
    particlesJS("particless-js", {
      "particles": {
      "number": {
        "value": 150,
        "density": {
          "enable": true,
          "value_area": 789.1476416322727
        }
      },
      "color": {
        "value": "#ffffff"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 1,
        "random": false,
        "anim": {
          "enable": true,
          "speed": 0.2,
          "opacity_min": 0,
          "sync": false
        }
      },
      "size": {
        "value": 3,
        "random": true,
        "anim": {
          "enable": true,
          "speed": 4,
          "size_min": 0,
          "sync": false
        }
      },
      "line_linked": {
        "enable": false,
        "distance": 150,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 0.7,
        "direction": "none",
        "random": true,
        "straight": false,
        "out_mode": "out",
        "bounce": false,
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
      },
      "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": true,
          "mode": "bubble"
        },
        "onclick": {
          "enable": true,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 600,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 83.91608391608392,
          "size": 1,
          "duration": 3,
          "opacity": 1,
          "speed": 5
        },
        "repulse": {
          "distance": 200,
          "duration": 0.4
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
      },
      "retina_detect": true
      });
   
   // home bubble 
      particlesJS("particleses-js", {
      "particles": {
      "number": {
        "value": 150,
        "density": {
          "enable": true,
          "value_area": 789.1476416322727
        }
      },
      "color": {
        "value": "#000"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.48927153781200905,
        "random": false,
        "anim": {
          "enable": true,
          "speed": 0.2,
          "opacity_min": 0,
          "sync": false
        }
      },
      "size": {
        "value": 3,
        "random": true,
        "anim": {
          "enable": true,
          "speed": 4,
          "size_min": 0,
          "sync": false
        }
      },
      "line_linked": {
        "enable": false,
        "distance": 150,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 0.4,
        "direction": "none",
        "random": true,
        "straight": false,
        "out_mode": "out",
        "bounce": false,
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
      },
      "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": true,
          "mode": "bubble"
        },
        "onclick": {
          "enable": true,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 600,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 83.91608391608392,
          "size": 1,
          "duration": 3,
          "opacity": 1,
          "speed": 5
        },
        "repulse": {
          "distance": 200,
          "duration": 0.4
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
      },
      "retina_detect": true
      });
      
      
      
      
   // carousel
      $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:2
          }
      }
      })
</script>


@endsection

