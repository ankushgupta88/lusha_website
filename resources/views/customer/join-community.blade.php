@extends('layouts.after-login-master')

@section('content')

<!--banner section-->
<section class="app"> 
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-2 side-content shadow">
            @include('layouts.sidebar')
        </div>
          <div class="col-md-9">
    <!--<section class="banner-section bg-clr py-2 py-md-5">-->
    <!--    <div class="container">-->
    <!--     <div class="row align-items-center">-->
    <!--         <div class="col-md-12 text-center">-->
    <!--             <div class="banner-text text-white">-->
    <!--                 <h1 class="fw-bold">Join the Lusha community, <br> Get credits!</h1>-->
    <!--                 <a href="{{url('/get-free-credits')}}"><button class="btn banner-btn-primary my-4"> Get free credits  </button></a>-->
    <!--             </div>-->
    <!--         </div>-->
    <!--     </div>-->
    <!--    </div>-->
    <!--</section>-->
    
<!--two block section-->
   <section class="two-block-section block-space">
     <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
         <div class="content-block text-center">
             <div class="main-title">
                 <h1 class="main-title-text fw-bold main-clr"> What is Lusha community? </h1>
                 <p> Lusha’s community members help keep our database accurate and up-to-date by sharing their professional network’s contact details in exchange for credits.</p>
             </div> 
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
                 <div class="main-title text-center">
                     <h1 class="main-title-text fw-bold"> How Lusha uses your data contribution </h1>
                 </div>
             </div>
         </div>
         <div class="row pt-4 pt-md-5">
             <div class="col-md-6">
                 <div class="benefits-blk-content mb-3 mb-md-0 shadow p-4 heigth-100">
                    <h5 class="fw-bold mb-0 py-2 mb-2"> <i class="fa fa-hand-paper-o pe-2" aria-hidden="true"></i> Information we do not collect </h5>
                     <ul class="ps-3 mb-0">
                         <li> We do not process or capture any additional information, other than email signature, in emails that are sent to or received by our Community members.</li>
                         <li> We do not track personal browsing history.</li>
                         <li> We do not look at calendars, meetings, or meeting attendees. </li>
                         <li> We do not collect contact information or a user’s geolocation </li>
                     </ul>
                 </div>
             </div>
              <div class="col-md-6">
                 <div class="benefits-blk-content mb-3 mb-md-0 shadow p-4 heigth-100">
                    <h5 class="fw-bold mb-0 py-2 mb-2"> <i class="fa fa-thumbs-o-up pe-2" aria-hidden="true"></i> Information we collect </h5>
                    <p> The type of business contact information that we collect is what you would normally find on a business card or in an email signature. This includes a name, company name, job title, business phone number, and email address.</p>
                    <p class="mb-0"> The majority of information that we collect from Lusha Community members confirms the data we already have in our database for professional purposes and acts as a system of validation and fraud protection.</p>
                 </div>
             </div>
         </div>
     </div>
    </section>
    
<!--ccpa-gdpr section-->
 <section class="ccpa-gdpr-section block-space block-space-bottom ">
    <div class="container">
     <div class="row align-items-center">
         <div class="col-md-4 col-sm-3 col-12">
             <div class="img-blk text-md-end text-center">
                <img src="{{url('public/assets/images/gdpr.png')}}" alt="Image"/ class="img-fluid">
             </div>
         </div>
         <div class="col-md-4 col-sm-6 col-12">
             <div class="main-title text-center text-white">
                     <h1 class="main-title-text fw-bold pb-3 pb-md-4 pt-3 mb-0"> CCPA and GDPR aligned </h1>
                     <p class="px-3 px-md-0"> Lusha has strict policies in place to ensure our data and data collection methods are in compliance with ISO 27701, CCPA, and aligned with GDPR.</p>
                 </div>
         </div>
           <div class="col-md-4 col-sm-3 col-12">
             <div class="img-blk text-center text-md-start">
                <img src="{{url('public/assets/images/ccpa.png')}}" alt="Image"/ class="img-fluid">
             </div>
         </div>
     </div>
    </div>
 </section>
 
 <!--faq section-->
  <section class="faq-section block-space">
   <div class="container">
    <div class="row">
        <div class="col-md-12">
                 <div class="main-title text-center pb-4 pb-md-5">
                     <h1 class="main-title-text fw-bold"> Common questions </h1>
                 </div>
             </div>
     <div class="col-md-12">
      <div class="faq-content">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Isn’t sharing contacts a violation of privacy?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p class="mb-0"> Lusha processes business contact information in accordance with all applicable privacy laws. Our privacy team is dedicated to collecting information while demonstrating conformance with all applicable privacy rules and regulations.</p>
                 </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Will my contacts know Lusha received their information from me?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
               <p class="mb-0"> No they will not. Lusha allows you to confidentially share business contact details and does not identify the specific source of information that contributed to its database.</p>
                </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Do Lusha’s products read my email messages or modify my address book entries?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <p> No.  We apply privacy by design principles so our algorithms are only designed to search for and seek out email headers and signatures, to capture only basic business contact and company information. Lusha creates and uses its own data structure and doesn’t modify any of your information.</p>
                <p class="mb-0"> Lusha’s products undergo close compliance scrutiny including by the major platforms (e.g. Google, Firefox, Windows) to ensure our service is not using your data in a way that was not described to you. </p>
            </div>
            </div>
          </div>
        </div>  
      </div>
     </div>
    </div>
   </div>
  </section>
   
<!--Get Started section-->
  <section class="get-startred-section block-space mb-md-5 pb-5">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
               <div class="started-content p-4 p-md-5 bg-img" style="background-image:url('public/assets/images/fbgbx2.png')">
                   <div class="main-title text-center">
                     <h1 class="main-title-text fw-bold text-white pb-4 pt-3"> Join the Lusha community </h1>
                 </div> 
                 <div class="credits-btn text-center">
                    <a href="{{url('/get-free-credits')}}"><button class="btn app-btn-primary mt-2"> Get 25 free credits now  </button></a>
                 </div>
                 
                 
               </div>  
             </div>
         </div>
      </div>
  </section>
  </div>
   </div>
         </div>
      </section>
@endsection
