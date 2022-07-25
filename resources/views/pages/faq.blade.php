@extends('layouts.master2')
@section('content')
<style>
   .accordion__header {
   padding: 1em;
   background-color: #ccc;
   margin-top: 2px;
   display: flex;
   justify-content: space-between;
   align-items: center;
   cursor: pointer;
   }
   .accordion__header > * {
   margin-top: 0;
   margin-bottom: 0;
   font-size: 16px;
   }
   .accordion__header.is-active {
   background-color: #000;
   color: #fff;
   }
   .accordion__toggle {
   margin-left: 10px;
   height: 3px;
   background-color: #222;
   width: 13px;
   display: block;
   position: relative;
   flex-shrink: 1;
   border-radius: 2px;
   }
   .accordion__toggle::before {
   content: "";
   width: 3px;
   height: 13px;
   display: block;
   background-color: #222;
   position: absolute;
   top: -5px;
   left: 5px;
   border-radius: 2px;
   }
   .is-active .accordion__toggle {
   background-color: #fff;
   }
   .is-active .accordion__toggle::before {
   display: none;
   }
   .accordion__body {
   display: none;
   padding: 1em;
   border: 1px solid #ccc;
   border-top: 0;
   }
   .accordion__body.is-active {
   display: block;
   }
</style>
<!--banner section-->
<section class="banner_section_main faq_banner">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-10">
            <div class="banner_text  text-center text-md-start">
               <h1 class="hero__title fw-bold">Community <span style="color: #FFB116;"> FAQ</span></h1>
               <p class="hero__subtitle">The questions connected to the community FAQ are listed here. Learn more about our community and don't hesitate to contact us if you have any more questions.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!--accordion section-->
<section class="faq_accordion">
   <div class="container">
      <div class="row">
         <div class="col-9 mx-auto">
            <div class="faq_accordion_inner">
               <div class="accordion">
                  <div class="accordion__header is-active">
                     <h2>What our platform is?</h2>
                     <span class="accordion__toggle"></span>
                  </div>
                  <div class="accordion__body is-active">
                     <p>It is a quick, self-service SaaS platform that provides precise data refinement for Business - to - business companies so that they may engage with their prospects successfully. With up to 98 percent accuracy, it delivers the most relevant B2B contact and company information.</p>
                  </div>
                  <div class="accordion__header">
                     <h2>What is our community?</h2>
                     <span class="accordion__toggle"></span>
                  </div>
                  <div class="accordion__body">
                     <p>Joining its community allows users to share their business network contact details with it to guarantee our database is correct and up-to-date, in return for extra credits or free access to its premium services. For additional information, please see our community page.</p>
                  </div>
                  <div class="accordion__header">
                     <h2>How to become a community member?</h2>
                     <span class="accordion__toggle"></span>
                  </div>
                  <div class="accordion__body">
                     <p>It allows only legitimate business professionals to become a member of its community, only if they contribute to the community sufficient business information. During signup and each month thereafter it performs validity checks of your data contribution through your email account and any other integration connected.</p>
                  </div>
                  <div class="accordion__header">
                     <h2>What information it collects and use from community members?</h2>
                     <span class="accordion__toggle"></span>
                  </div>
                  <div class="accordion__body">
                     <p>The information we gather is the same as that contained on a business card, and it includes;</p>
                     <ul>
                         <li>Full name</li>
                         <li>Company name</li>
                         <li>Job title</li>
                         <li>Business phone number</li>
                         <li>and email address</li>
                     </ul>
                  </div>
                  <div class="accordion__header">
                     <h2>Will my contacts be aware that it obtained their information from me?</h2>
                     <span class="accordion__toggle"></span>
                  </div>
                  <div class="accordion__body">
                     <p>No, they will not. It allows you to exchange company contact information privately and does not disclose the exact source of information that contributes to its database.</p>
                  </div>
                  <div class="accordion__header">
                     <h2>Isn't sharing contacts a violation of privacy?</h2>
                     <span class="accordion__toggle"></span>
                  </div>
                  <div class="accordion__body">
                     <p>It handles business contact information in line with all applicable privacy regulations. Our privacy team is committed to gathering information while adhering to all current privacy standards and regulations.</p>
                  </div>
                  <div class="accordion__header">
                     <h2>Can I choose which business contacts I wish to share?</h2>
                     <span class="accordion__toggle"></span>
                  </div>
                  <div class="accordion__body">
                     <p>It does not now, but its subscribers grant access to their contacts in their email database via Outlook/G-Suite permissions, including;</p>
                     <ul>
                         <li>Their names</li>
                         <li>Email addresses</li>
                         <li>Job titles</li>
                         <li>Business names</li>
                         <li>Phone numbers contained in their email headers and signatures.<br>If you want to have access to its database without disclosing your business connections, you may purchase a plan with the quantity of credits you require. Please see our Pricing page for additional information on premium plans.</li>
                     </ul>
                  </div>
                  <div class="accordion__header">
                     <h2>Do its services read my email messages or alter my address book entries?</h2>
                     <span class="accordion__toggle"></span>
                  </div>
                  <div class="accordion__body">
                     <p>No. It creates and deploys its own data structure and makes no changes to your data. Its products are submitted to stringent compliance testing, including by important platforms like as Google, Windows, and Firefox, to ensure that our service is not using your data in ways that have not been previously disclosed to you.</p>
                  </div>
                  <div class="accordion__header">
                     <h2>Is it legal to acquire third-party company contact information?</h2>
                     <span class="accordion__toggle"></span>
                  </div>
                  <div class="accordion__body">
                     <p>It takes the data privacy and security of our business, our customers, and the consumers of our consumers very seriously. This is why, when required by law, we notify every new contact that we collect for our database. Furthermore, it has strong procedures in place to guarantee that our data and data gathering practices are in accordance with the most recent regulations, such as GDPR and CCPA.</p>
                  </div>
                  <div class="accordion__header">
                     <h2>Who can participate in our community?</h2>
                     <span class="accordion__toggle"></span>
                  </div>
                  <div class="accordion__body">
                     <p>Its network is geared for B2B business professionals. Individuals using private email addresses are not permitted to create accounts with public email providers such as Gmail, Yahoo, and Hotmail.</p>
                     <strong>Requirements for becoming a member of our community;</strong>
                     <ul>
                         <li>Sign up using a business email address, which we will validate by emailing you a confirmation link.</li>
                         <li>Accept the Terms of Service as well as the Community Code.</li>
                         <li>Allow it access to your email account.</li>
                     </ul>
                  </div>
                  <div class="accordion__header">
                     <h2>Cost to join it's community?</h2>
                     <span class="accordion__toggle"></span>
                  </div>
                  <div class="accordion__body">
                     <p>Any of our users can join its community for free if they use a supported email service, exchange their contacts with it, and follow its community terms of service and code of behavior.</p>
                  </div>
                  <div class="accordion__header">
                     <h2>How to cancel membership?</h2>
                     <span class="accordion__toggle"></span>
                  </div>
                  <div class="accordion__body">
                     <p>Yes, you have the option to discontinue your subscription at any time.</p>
                  </div>
                  <div class="accordion__header">
                     <h2>What happens if I decide to cancel my membership?</h2>
                     <span class="accordion__toggle"></span>
                  </div>
                  <div class="accordion__body">
                     <p>You will lose access to community advantages if you cancel your membership. It will no longer be able to access your contacts' information. Having said that, it will keep the information you've already supplied up to that point.</p>
                  </div>
                  <div class="accordion__header">
                     <h2>How can I terminate my data contribution to the community?</h2>
                     <span class="accordion__toggle"></span>
                  </div>
                  <div class="accordion__body">
                     <p>You may stop sharing your contact information with it by logging into your Google account. Please contact us if you require assistance.</p>
                  </div>
                  <div class="accordion__header">
                     <h2>For more questions?</h2>
                     <span class="accordion__toggle"></span>
                  </div>
                  <div class="accordion__body">
                     <p>If you have any additional question please feel free to contact us. </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
   $('.accordion__header').click(function(e) {
   e.preventDefault();
   var currentIsActive = $(this).hasClass('is-active');
   $(this).parent('.accordion').find('> *').removeClass('is-active');
   if(currentIsActive != 1) {
   $(this).addClass('is-active');
   $(this).next('.accordion__body').addClass('is-active');
   }
   });
</script>
@endsection