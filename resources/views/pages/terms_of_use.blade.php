@extends('layouts.master2')
@section('content')
<style>
   #two,#three,#four,#five,#six {
   display: none;
   }
</style>
<!--banner section-->
<section class="banner_section_main faq_banner">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-8">
            <div class="banner_text  text-center text-md-start">
               <h1 class="hero__title fw-bold">Community <span style="color: #FFB116;"> Terms</span>Of Use</h1>
               <p class="hero__subtitle">Follow our community's terms of service and help to making our platform more accurate. Please contact us if you require any other information.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="tabbing">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-3">
            <div class="sidebar">
               <button class="sidebarBtn selected" onclick=(switchTabs("one")) id="oneBtn">
               The Community and the Service
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("two")) id="twoBtn">
               Operating in accordance
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("three")) id="threeBtn">
               Cancellation
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("four")) id="fourBtn">
               Operating in accordance with Lusha’s Code of Conduct
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("five")) id="fiveBtn">
               Our ethical principles
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("six")) id="sixBtn">
               Professional Responsibilities
               </button>
            </div>
         </div>
         <div class="col-md-9">
            <div class="content">
               <div id="one" class="tab">
                  <p>Joining, access, benefits, cancellation</p>
                  <p>Our community members contribute to the accuracy and maintenance of our database by donating the contact information of their professional network in exchange for extra credits or access to premium services. These Terms govern the relationship between our platform and you, the Community Member.&nbsp;</p>
                  <h4><b>1. Joining, access, benefits, cancellation</b></h4>
                  <p><strong>a.&nbsp;</strong>Individual users are not eligible for the Services. You represent and warrant that you have all of the necessary rights, permissions, and authorizations to join our Community.&nbsp;&nbsp;</p>
                  <p><strong>b.&nbsp;</strong>If you choose to join our Community, you expressly authorize and request that our Services access your contacts in your email database, including</p>
                  <ul><li>Their names</li><li>Email addresses</li><li>Job titles</li><li>Company names, and phone numbers&nbsp;</li></ul>
                  <p><strong>c.&nbsp;</strong>The appropriate sections of the information will be used by it to expand its database and help the growth of our Community which can do the following things;</p>
                  <ul><li>May reproduce</li><li>Distribute</li><li>Publish</li><li>or display the information gathered or any portion of it</li><li>Transfer</li><li>Disclose</li><li>Make the information or any portion of it accessible to any third party including our customers</li></ul>
                  <p><strong>d.&nbsp;</strong>You recognize and agree that after joining our Community, the services will automatically access and collect information stored in your email account, both locally and/or on a distant server.</p>
                  <p><strong>e.&nbsp;</strong>Please keep in mind that it will not read the content of your email exchange and that the only information received will be the information indicated above.</p>
                  <p><strong>f.&nbsp;&nbsp;</strong>It will do a validity check on your email account and any other integration.</p>
               </div>
               <div id="two" class="tab">
                   <h3>2. Operating in accordance</h3>
                   <p><strong>a. </strong>In exchange for joining our community and providing access to the information stated above, you will be entitled to benefits in your usage of the Services. It will present you with the benefits in a separate offer.&nbsp;&nbsp;</p>
                   <p><strong>b.&nbsp;</strong>As a one-time incentive, when you join up to become a community member you will recieve great benefits.&nbsp;</p>
               </div>
               <div id="three" class="tab">
                   <h3>3. Cancellation</h3>
                   <p><strong>a. </strong>You can discontinue your involvement in our community at any moment.</p>
                   <p><strong>b. </strong>If you cancel your participation in our Community, then:</p>
                   <p>&nbsp; i. Any benefits you have received in return for your membership will not be renewed, and will expire on the day of cancellation.</p>
                   <p>&nbsp;ii. You will, however, be allowed to use the benefits that have already been provided to you as of the date of cancellation.</p>
                   <p>&nbsp;iii. You will no longer have any access to our community.&nbsp;</p>
               </div>
               <div id="four" class="tab">
                   <h3>4. Operating in accordance with Code of Conduct</h3>
                   <p><strong>a.&nbsp;</strong>Our code of conduct ("Code") directs how we gather, validate, and safeguard data.&nbsp;</p>
                   <p><strong>b.&nbsp;</strong>Our worldwide community was created to help it become the easiest, collaborative, and accurate data-enrichment service possible, due to the community member's contribution.&nbsp;</p>
                   <p><strong>c.&nbsp;</strong>By joining our community, you accept and undertake to act in line with the code and to support, promote, and respect its ideals. Failure to follow the Code of Conduct may result in the instant cancellation of your membership in our community.&nbsp;</p>
                   <p><strong>d.&nbsp;</strong>Each Community Member should promote and completely support all B2B professionals in adhering to the Code.&nbsp;&nbsp;</p>
               </div>
               <div id="five" class="tab">
                   <h3>5. Our ethical principles</h3>
                   <p><strong>a.&nbsp; Collaboration:</strong></p>
                   <p>Our community promotes the exchange of reliable and up-to-date B2B contact information. It takes steps to delete public emails such as Gmail and other accounts) and to amend any outdated or false information.&nbsp;&nbsp;</p>
                   <p><strong>b. Avoid all harm:</strong></p>
                   <p>Our community has a stringent "no harm" policy. This implies that we do not reveal any information that may cause harm to others.&nbsp;&nbsp;</p>
                   <p><strong>c. Honor confidentiality:</strong></p>
                   <p>Because it is not legally obliged, it will not reveal the source of its professional contact information. Our Community Members are also required not to reveal professional data that are in "stealth mode" or that would wish to stay private.</p>
               </div>
               <div id="six" class="tab">
                   <h3>6. Professional Responsibilities</h3>
                   <p><strong>a. Professionalism:</strong></p>
                   <p>We are committed to and work hard to always stay up to date with relevant laws and legislation regarding the proper use of information provided to our users, including the proper conduct of sending mass unsolicited emails (SPAM) or conducting mass unsolicited phone calls in any jurisdiction in which our users operate.</p>
                   <p><strong>b. Respect privacy:</strong></p>
                   <p>The information given will not be used in any way that breaches individual rights. We do not gather unnecessary company contact information and do not keep it for any longer than required.</p>
                   <p><strong>c. Fairness:</strong></p>
                   <p>It and its Community Members must cooperate with any data subject requests, which may include requests to stop using or processing information, as well as requests to erase business information.</p>
                   <p>These are the responsibilities that we fulfill to maintain the reliability of our platform.</p>
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