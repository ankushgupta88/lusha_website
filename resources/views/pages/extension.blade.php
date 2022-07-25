@extends('layouts.master2')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<style>
   .panel-heading .accordion-toggle:after {
   /* symbol for "opening" panels */
   font-family: 'Glyphicons Halflings'; /* essential for enabling glyphicon */
   content: "\e114"; /* adjust as needed, taken from bootstrap.css */
   float: right; /* adjust as needed */
   color: blue; /* adjust as needed */
   }
   .panel-heading .accordion-toggle.collapsed:after {
   /* symbol for "collapsed" panels */
   content: "\e080"; /* adjust as needed, taken from bootstrap.css */
   }
</style>


<!--banner section-->
<section class="banner_section_main extension_banner">
   <div class="container-fluid">
   <div class="row align-items-center">
      <div class="col-md-6">
         <div class="banner_text  text-center text-md-start">
            <h1 class="hero__title fw-bold">Reach Millions <br>of Prospects</h1>
            <img src="{{url('public/assets/images/Contact-us-pana-1.png')}}" alt="Image"/ class="img-fluid">
            <p class="hero__subtitle">Obtain accurate direct calls, emails and other contacts in seconds to engage with the correct prospects.</p>
            <div class="banner-email mt-4">
               @if(Auth::user())
               <div class="my-account-btn">
                  <a href="{{url('/dashboard')}}"><button class="btn account_btn py-3">Get Started </button></a>
                  @else
                  <a href="{{url('/register')}}"><button class="btn py-4 get_start">Get Started</button></a>
                  @endif 
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="banner-img">
               <img src="{{url('public/assets/images/Contact-us-pana-1.png')}}" alt="Image"/ class="img-fluid">
            </div>
         </div>
      </div>
   </div>
</section>


<!--benefits section-->
<section class="benefits-section benefits-extension block-space block-space-bottom">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="main_title text-center">
               <h1 class="main-title-text fw-bold">Sales Benefits Using Our Platform</h1>
            </div>
         </div>
      </div>
      <div class="row pt-4 pt-md-5">
         <div class="col-lg-4">
            <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
               <i class="fa fa-list-ul" aria-hidden="true"></i>
               <h5 class="fw-bold mb-0 py-2  mt-3"> Accurate leads </h5>
               <p class="mb-0 px-4"> Get a good number of leads each month and build a better database.</p>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
               <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
               <h5 class="fw-bold mb-0 py-2  mt-3"> Best accuracy rate </h5>
               <p class="mb-0 px-4"> Users can always get the most correct direct dials, phone numbers, and emails.</p>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
               <i class="fa fa-file-o" aria-hidden="true"></i>
               <h5 class="fw-bold mb-0 py-2  mt-3"> Reach prospects directly </h5>
               <p class="mb-0 px-4">Users can reach their prospects on the phone with millions of direct dials.</p>
            </div>
         </div>
      </div>
   </div>
</section>


<!--services section-->
<section class="services_main services_extension">
   <div class="container">
      <div class="row services_right_main">
         <div class="col-md-6 services_right_inner">
            <div class="services_right">
               <h2>How Does Our Extension Contact Finder Work?</h2>
               <p>You have to add our extension (contact finder) to your Chrome browser to prospect faster. Open our Extension on Gmail, LinkedIn or any company site to instantly access your prospect’s contact details and B2B company info in no time.</p>
            </div>
         </div>
         <div class="col-md-6">
            <div class="services_left">
               <img src="{{url('public/assets/images/Research-paper-pana.png')}}" alt="Image"/ class="img-fluid">
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="services_left">
               <img src="{{url('public/assets/images/img11.jpg')}}" alt="Image"/ class="img-fluid">
            </div>
         </div>
         <div class="col-md-6">
            <div class="services_right">
               <h2>Provide Trusted Data</h2>
               <p>Our data is committed to and in accordance with the <strong>GDPR</strong> and <strong>CCPA</strong> regulations.</p>
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
                    <p>It’s simple to use, with detailed instructions. They have excellent technical support and billing staff. In my opinion, they are quick and responsive. You can do anything you need to do in order for your business to develop.</p>
                    <h2>Charles</h2>
                    <span>Company Owner & Developer</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!--benefits section-->
<section class="benefits-section benefits-extension block-space block-space-bottom">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="main_title text-center">
               <h1 class="main-title-text fw-bold">Get your work done quickly.</h1>
               <p>On our platform, we provide our users quick but reliable work.</p>
            </div>
         </div>
      </div>
      <div class="row pt-4 pt-md-5">
         <div class="col-lg-4">
            <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
               <i class="fa fa-building-o" aria-hidden="true"></i>
               <h5 class="fw-bold mb-0 py-2  mt-3">Usage Analytics </h5>
               <p class="mb-0 px-4"> With actionable information, you can have clear insights into team performance.</p>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
               <i class="fa fa-cloud-upload" aria-hidden="true"></i>
               <h5 class="fw-bold mb-0 py-2  mt-3"> Simple Click Integrations </h5>
               <p class="mb-0 px-4"> Save contact lists to your dashboard or preferred tools directly with simple steps.</p>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
               <i class="fa fa-list-alt" aria-hidden="true"></i>
               <h5 class="fw-bold mb-0 py-2  mt-3"> Create Lists </h5>
               <p class="mb-0 px-4">Create targeted contact lists in secs and easily export to CSV. Help to use for different purposes. </p>
            </div>
         </div>
      </div>
      <div class="row pt-4 pt-md-5">
         <div class="col-lg-4">
            <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
               <i class="fa fa-envelope" aria-hidden="true"></i>
               <h5 class="fw-bold mb-0 py-2  mt-3"> Bulk Enrichment </h5>
               <p class="mb-0 px-4">You can obtain a large number of contact details, including direct dialling and emails.</p>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
               <i class="fa fa-users" aria-hidden="true"></i>
               <h5 class="fw-bold mb-0 py-2  mt-3">Team management </h5>
               <p class="mb-0 px-4"> Users can gain control and manage more effectively. Assign and distribute credits as you see fit.</p>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
               <i class="fa fa-globe" aria-hidden="true"></i>
               <h5 class="fw-bold mb-0 py-2  mt-3"> Available On all Platforms </h5>
               <p class="mb-0 px-4">Using our tool, users can get contact details on any platform including website and many others.</p>
            </div>
         </div>
      </div>
   </div>
</section>



<!--accordian section-->
<section class="accordian extension_accordion">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="accordian_caption">
                <div class="main_title text-center">
                   <h1 class="main-title-text fw-bold">Questions You Might Have</h1>
                   <p>Need more help? Check out our help center</p>
                </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-9 m-auto">
            <div class="accordian_inner">
               <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                           What is a contact finder?
                           </a>
                        </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                           <p>It is a data provider tool that you can add to your chrome extension to find contact details.</p>
                          
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                           Is this a free service?
                           </a>
                        </h4>
                     </div>
                     <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                           <p>Yes, this is a completely free service. Get many leads every month at no cost and grow your database.</p>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                           Can we use for free?
                           </a>
                        </h4>
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                           <p>Yes, it is completely free to use. Sign up and get started immediately.</p>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
                           How do to add extension to LinkedIn?
                           </a>
                        </h4>
                     </div>
                     <div id="collapsefour" class="panel-collapse collapse">
                        <div class="panel-body">
                           <p>Simply install and activate our browser extension. To begin prospecting, go to LinkedIn and click on the our extension icon. Simply put in the prospect's name to discover them and click on the extension icon to receive the contact details you want.</p>
                          
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
                          How accurate is our data?
                           </a>
                        </h4>
                     </div>
                     <div id="collapsefive" class="panel-collapse collapse">
                        <div class="panel-body">
                           <p>Our tool has an accuracy rate of more than 98%. And our data is committed to and in accordance with the GDPR and CCPA regulations.</p>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsesix">
                           How to extract phone numbers & email addresses from Linkedin after prospecting?
                           </a>
                        </h4>
                     </div>
                     <div id="collapsesix" class="panel-collapse collapse">
                        <div class="panel-body">
                           <p><strong>Follow the steps:</strong></p>
                            <ul>
                               <li>Enter the name of the contact you're looking for</li>
                               <li>Once you've found them</li>
                               <li>To obtain their company details, simply click on the extension icon</li>
                               <li>Now to get the contact information, click on the show contact button</li>
                            
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseseven">
                          How much is cost?
                           </a>
                        </h4>
                     </div>
                     <div id="collapseseven" class="panel-collapse collapse">
                        <div class="panel-body">
                           <p>It offers free lifetime plans as well as premium plans beginning at $99 per month.
After registering on our platform you get free prospect emails and phone numbers every month forever. If you want more, you may buy extra plans.</p>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseeight">
                          What differentiates our tool from others?
                           </a>
                        </h4>
                     </div>
                     <div id="collapseeight" class="panel-collapse collapse">
                        <div class="panel-body">
                           <p>Signing up for our tool is much simpler, and it is completely free without the use of a credit card. You can begin collecting prospect contact data as soon as you sign up. Our tool is far too simple and straightforward. There is no complicated functionality required to register an account or utilise our tools.</p>
                        </div>
                     </div>
                  </div>
                  <!--<div class="panel panel-default">-->
                  <!--   <div class="panel-heading">-->
                  <!--      <h4 class="panel-title">-->
                  <!--         <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsenine">-->
                  <!--        How we are different from other tools?-->
                  <!--         </a>-->
                  <!--      </h4>-->
                  <!--   </div>-->
                  <!--   <div id="collapsenine" class="panel-collapse collapse">-->
                  <!--      <div class="panel-body">-->
                  <!--         <p>Signing up for our tool is much simpler, and it is completely free without the use of a credit card. You can begin collecting prospect contact data as soon as you sign up. Our tool is far too simple and straightforward. There is no complicated functionality required to register an account or utilise our tools.</p>-->
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--</div>-->
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<!--brand section-->
<section class="extension_brand">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="extension_brand_inner">
                    <img src="{{url('public/assets/images/google.png')}}" alt="Image"/ class="img-fluid">
                </div>
            </div>
            <div class="col">
                <div class="extension_brand_inner">
                    <img src="{{url('public/assets/images/ad.png')}}" alt="Image"/ class="img-fluid">
                </div>
            </div>
            <div class="col">
                <div class="extension_brand_inner">
                    <img src="{{url('public/assets/images/uber.png')}}" alt="Image"/ class="img-fluid">
                </div>
            </div>
            <div class="col">
                <div class="extension_brand_inner">
                    <img src="{{url('public/assets/images/MS.png')}}" alt="Image"/ class="img-fluid">
                </div>
            </div>
            <div class="col">
                <div class="extension_brand_inner">
                    <img src="{{url('public/assets/images/google.png')}}" alt="Image"/ class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>


@endsection