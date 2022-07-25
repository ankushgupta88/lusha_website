@extends('layouts.master2')
@section('content')
<style>
   #two,#three {
   display: none;
   }
</style>
<!--banner section-->
<section class="banner_section_main career_banner pricing_banner community_banner">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-12">
            <div class="banner_text  text-center text-md-start">
               <h1 class="hero__title fw-bold"><span style="font-size: 55px;">Our</span> <span style="color: #f71966;font-size: 55px;">Community</span></h1>
               <p>Members contribute to the database’s accuracy </p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4">
            <div class="social_icon_banner">
               <i class="fa fa-linkedin-square" aria-hidden="true"></i>
               <h2>LinkedIn</h2>
               <p>Contact with our community</p>
            </div>
         </div>
         <div class="col-md-4">
            <div class="social_icon_banner">
               <i class="fa fa-slack" aria-hidden="true"></i>
               <h2>Slack</h2>
               <p>Contact with our community</p>
            </div>
         </div>
         <div class="col-md-4">
            <div class="social_icon_banner">
               <i class="fa fa-facebook-square" aria-hidden="true"></i>
               <h2>Facebook</h2>
               <p>Contact with our community</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Edition Works section-->
<section class="edition_work">
   <div class="container">
      <div class="row">
         <div class="col-10 mx-auto">
            <div class="edition_work_inner">
               <h2>How Lusha’s Community Edition Works</h2>
               <p>When a member of our community agrees to our code of conduct and start using one of our products, it will connect their business email with our database.</p>
               <p>Itis solution obtains professional business network contact information such as email headers, signatures, and business profiles that are used by our clients and community members. It transmits Community members’ business connections in a secure manner, deletes old information, and merges it with our database.a</p>
               <p>When a member of our community agrees to our code of conduct and start using one of our products, it will connect their business email with our database.</p>
               <p>Itis solution obtains professional business network contact information such as email headers, signatures, and business profiles that are used by our clients and community members. It transmits Community members’ business connections in a secure manner, deletes old information, and merges it with our database.</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-10 mx-auto">
            <div class="collect_information">
               <i class="fa fa-check" aria-hidden="true"></i>
               <div class="information_content">
                  <h2>Information we collect</h2>
                  <p>The type of business contact information that we collect is what you would normally find on a business card or in an email signature. This includes a name, company name, job title, business phone number, and email address. The majority of information that we collect from our community members confirms the data we already have in our database for professional purposes and acts as a system of validation and fraud protection.</p>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-10 mx-auto">
            <div class="collect_information">
               <i class="fa fa-times" aria-hidden="true"></i>
               <div class="information_content">
                  <h2>Information we don't collect</h2>
                  <p>The type of business contact information that we collect is what you would normally find on a business card or in an email signature. This includes a name, company name, job title, business phone number, and email address. The majority of information that we collect from our community members confirms the data we already have in our database for professional purposes and acts as a system of validation and fraud protection.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Privacy Practices section-->
<section class="privacy_practices">
   <div class="container">
      <div class="row">
         <div class="col-10 mx-auto">
            <div class="privacy_practices_inner">
               <h4>Community </h4>
               <h2>Privacy Practices</h2>
               <p>Before entering any contact information, each professional receives a message with instructions on how to maintain, amend, delete, or remove their profile, if applicable by law.</p>
               <p>When relevant, we inform our users of the date on which their prospect was alerted of their presence in our database. This allows prospects to respond to any inquiries they may have about how their contact information was collected.</p>
               <p>We enable individuals to opt-out of our database easily via a self-removal form. Feel free to contact us for more information.</p>
               <a href="{{url('/contact')}}"><button class="btn account_btn py-3">Contact Us </button></a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--conduct code section-->
<section class="conduct_code">
   <div class="container">
      <div class="row">
          <div class="col-md-1"></div>
         <div class="col-md-5">
            <div class="conduct_code_inner">
               <h2>Our Ethical Principles</h2>
               <p>The community encourages the exchange of accurate and up-to-date B2B contact information. It takes steps to deactivate public email accounts, such as Gmail and Yahoo, and to replace any obsolete information.</p>
            </div>
         </div>
         <div class="col-md-5">
            <div class="conduct_code_inner">
               <h2>Professionalism</h2>
               <p>We are devoted to continually checking the rules and legislation regulating the correct use of information submitted to our users. We provide a secure and easy to use platform to our users (with all documentations).  . </p>
            </div>
         </div>
         <div class="col-md-1"></div>
      </div>
      <div class="row mt-4">
          <div class="col-md-1"></div>
         <div class="col-md-5">
            <div class="conduct_code_inner">
               <h2>Avoid All Harm</h2>
               <p>Our community has that we do not reveal any information that may cause harm to others. Therefore all the information on our platform is secured and is not opened publicly. For more information contact our team. </p>
            </div>
         </div>
         <div class="col-md-5">
            <div class="conduct_code_inner">
               <h2>Respect Privacy</h2>
               <p>The information given will not be used in any way that breaches individual rights. We do not gather unnecessary company contact information. and do not keep it for any longer than required.</p>
            </div>
         </div>
         <div class="col-md-1"></div>
      </div>
      <div class="row mt-4">
          <div class="col-md-1"></div>
         <div class="col-md-5">
            <div class="conduct_code_inner">
               <h2>Honor Confidentiality</h2>
               <p>Unless compelled by law, our platform will not reveal the source of its professional contact information. Members of our community are also asked not to reveal professional details that are in “stealth mode”. </p>
            </div>
            <div class="col-md-1"></div>
         </div>
         <div class="col-md-5">
            <div class="conduct_code_inner">
               <h2>Fairness</h2>
               <p>It and its community members shall cooperate with any demands to stop using or processing information, or even erase business details.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!--tabbing section-->
<section class="tabbings community-program_tabbings">
   <div class="container">
      <div class="row">
         <div class="col-lg-4">
            <div class="tabs_btn">
               <button class="sidebarBtn selected" onclick=(switchTabs("one")) id="oneBtn">
               Code of conduct
               </button>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="tabs_btn">
               <button class="sidebarBtn" onclick=(switchTabs("two")) id="twoBtn">
               Compliance with the code
               </button>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="tabs_btn">
               <button class="sidebarBtn" onclick=(switchTabs("three")) id="threeBtn">
               Data Protection and Data Privacy 
               </button>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="content">
               <div id="one" class="tab">
                  <p>Our Code of Conduct governs how we gather, validate, and safeguard data. It is the compass that guarantees all data processing is done in a transparent, responsible, and ethical manner that benefits the public good. Our worldwide community was created to help us become the most easy and accurate data enrichment service.</p>
               </div>
               <div id="two" class="tab">
                   <p>The success of our community is dependent on both professional and ethical integrity. We think that our community of B2B professionals should set a good example by following to the Code of Conduct. Every member, should promote and completely support the commitment of all B2B professionals. The  members who see a violation of the code of conduct should immediately report it to us, as any such violation may result in additional action, including the cancellation or termination of any such members membership.</p>
               </div>
               <div id="three" class="tab">
                   <p>It tends to take the data privacy and security of our business, our consumers, and the consumers of our consumers very seriously.</p>
                   <p>It has committed to yearly privacy and security assessments by independent, third-party auditors to certify compliance with internationally accepted security measures. These safety procedures imply that our clients may have complete confidence in our capacity to provide appropriate privacy and security protections.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
<script>
   // function to handle the switich
   function switchTabs(id) {
   // get all the tabs
   let tabs = document.querySelectorAll(".tab")
   // get all the tab buttons
   let tabBtns = document.querySelectorAll('.sidebarBtn');
   // loop through the tabs, hiding all of them
   tabs.forEach(tab => {
   tab.style.display = 'none';
   });
   // loop through the tabs, and remove the '.selected' class
   tabBtns.forEach(tabBtn => {
   tabBtn.classList.remove('selected');
   });
   // show the desired tab
   document.getElementById(id).style.display = 'block';
   // add the 'selected' class to the corresponding btn
   document.getElementById(id + 'Btn').classList.add('selected');
   }
</script>