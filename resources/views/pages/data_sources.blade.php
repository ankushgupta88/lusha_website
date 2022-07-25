@extends('layouts.master2')
@section('content')
<style>
   #two,#three,#four {
   display: none;
   }
</style>
<!--banner section-->
<section class="banner_section_main faq_banner">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-12">
            <div class="banner_text  text-center text-md-start">
               <h1 class="hero__title fw-bold">Data <span style="color: #FFB116;"> Sources</span></h1>
               <p class="hero__subtitle">The contact and company data that you obtain is updated every time you conduct a search on our platform and validated from different sources</p>
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
               Data Contribution
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("two")) id="twoBtn">
               Insight and Analysis System
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("three")) id="threeBtn">
               Third Parties
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("four")) id="fourBtn">
               Information Available to Public
               </button>
            </div>
         </div>
         <div class="col-md-9">
            <div class="content">
               <div id="one" class="tab">
                  <p>Information sources we use:</p>
                  <h3>Data Contribution</h3>
                  <p>Members of our community who have agreed to give their contact information as part of our community initiative. Community members are people who volunteer to offer data from their own social business network to our community.</p>
                  <p>We get contact information from our affiliates' end users, such as;</p>
                  <ul><li>Subsidiaries</li><li>Parent companies</li><li>and other corporate entities. </li></ul>
               </div>
               <div id="two" class="tab">
                   <h3>Insight and Analysis System</h3>
                   <p>Its powerful algorithms and unique machine-learning models auto-complete company information based on data in its database and other publicly available information.</p>
                   <p>It completes email addresses, for example, based on conventional business email patterns. Its big data technology discovers the most up-to-date information for each Business card and eliminates any old information from the system at the same time.</p>
               </div>
               <div id="three" class="tab">
                   <h3>Third Parties</h3>
                   <p>We obtain information from business partners who hold well-known and trustworthy directories. To collect data from public records, publicly available information, and company directories.</p>
                   <p>We examine each vendor's security as well as the security of the data transfer. Our data is dedicated to and in line with the GDPR and CCPA legislation. We are always striving to guarantee that our data is compliant, and we update all contracts on an as-needed basis to ensure that we are in compliance with all current laws and regulations.</p>
               </div>
               <div id="four" class="tab">
                   <h3>Publicly Available Information</h3>
                   <p>With powerful technologies, our unique system examines publicly available sources and extracts publicly available information.</p>
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