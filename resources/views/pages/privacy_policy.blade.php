@extends('layouts.master2')
@section('content')
<style>
#two,#three,#four,#five,#six,#seven,#eight,#nine,#ten {
  display: none;
}
</style>
<!--banner section-->
<section class="banner_section_main faq_banner">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-8">
            <div class="banner_text  text-center text-md-start">
               <h1 class="hero__title fw-bold">Privacy<span style="color: #FFB116;"> Policy</span></h1>
               <p class="hero__subtitle">Users of this site should follow to the privacy policy outlined <br> below, and if you have any additional question, contact us.</p>
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
               1. What exactly are we and what do we do?
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("two")) id="twoBtn">
               2. Our commitments
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("three")) id="threeBtn">
               3. Types of data we collect from or about you
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("four")) id="fourBtn">
               4. Additional Restrictions
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("five")) id="fiveBtn">
               5. How we share your information
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("six")) id="sixBtn">
               6. How long do we keep your data?
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("seven")) id="sevenBtn">
               7. How to opt-out or access, rectify, and/or erase your Data
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("eight")) id="eightBtn">
               8. How do we safeguard and transfer your Data?
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("nine")) id="nineBtn">
               9. Changes to this policy
               </button><button class="sidebarBtn" onclick=(switchTabs("ten")) id="tenBtn">
               10. Contact us
            </div>
         </div>
         <div class="col-9">
            <div class="content">
               <div id="one" class="tab">
                  <p>It allows to view your personal information, edit or receive collected data.</p>
                  <h3>1. What exactly are we and what do we do?</h3>
                  <p>It is an incorporated company,(“sitename”, “we”, “us”).</p>
                  <p>Click to make contact with our team&nbsp; <a href="{{url('/contact')}}">Contact Now&nbsp;</a></p>
                  <p>It handles personal information. All processing operations carried out on this basis are formulated in a legal and secure manner, in accordance with its Data Processing Addendum. If you email us a request for such personal data, we will quickly forward it to our appropriate client or Licensee. We will not respond directly to such messages without their explicit agreement, unless required by law.</p>
                  <p>If users pay with a credit card, the transaction is handled by our service provider Stripe Inc., who does not have direct access to it. We've worked with Stripe to guarantee that your payment information is handled safely and privately.</p>
                  <p><strong>What we do</strong></p>
                  <p>The best sales teams utilise our tool&nbsp;to get accurate B2B contact and business information, save sales finding time, and complete more transactions.</p>
                  <p>Our Services are intended to assist our business users like B2B professionals, HR professionals, and sales professionals in validating and verifying Contact information and locating business details needed to interact with relevant contacts by providing access to business profiles stored in B2B DB.</p>
                  <p><strong>It may collect, utilise, or otherwise handle personal data about you if you are:</strong></p>
                  <ul>
                      <li>A contact whose data is utilised in our B2B Database of business contact details, as outlined below;</li>
                      <li>According to our Terms of Service, an authorised user (end-user) of a Licensee.</li>
                      <li>A user of our website</li>
                      <li>and online services</li>
                  </ul>
                  <p>This Privacy Policy defines our procedures for processing personal data ("Data"). Please read it carefully so that you understand what we may, as applicable, gather, utilize, and process your Information, as well as how you may opt-out or access, amend, and/or destroy your Data. If we collect and process personal data about you in the B2B Database, as mentioned above, you can opt out this.</p>
                  <p>If you have any queries concerning this Privacy Policy, please do not hesitate to contact our Privacy Team.</p>
               </div>
               <div id="two" class="tab">
                   <h3 id="2-our-commitments">2. Our commitments</h3>
                   <p>It is devoted to offering its unique service while protecting the privacy of all involved parties and complying with all applicable privacy and data protection laws.</p>
                   <p>We are devoted to offering the most useful and accurate Database to our Licensees and End Users, and we have developed internal processes to ensure correctness and relevancy. We, in particular, employ mechanisms to cross-check and verify the integrity of the information in its B2B Database and, to the greatest degree feasible, do not maintain personal and private contact details in the B2B Database. It simply gathers data that is required and does not collect any sensitive data.&nbsp;</p>
               </div>
               <div id="three" class="tab">
                   <h3>3. Types of data we collect from or about you</h3>
                   <p>Contacts, End Users, and Visitors' Data is collected and processed by us.</p>
                   <h4><strong>3.1 Information in our B2B Database</strong></h4>
                   <p>Contact Attributes and Company Information are included in the Data we supply to our Licensees. We only give information that would be found on a card or in a business email message body, or that is required to contact an individual with a business social network profile or to verify the legitimacy of such profile. See that the Information we cover for additional information on the Contact Attributes and Company Information that we provide to our Licensees.</p>
                   <p><strong>Our B2B Database is based on data gathered or generated from the following list:</strong></p>
                   <p><strong>Our Community Program:</strong> Under the rules of the our community program, community members exchange professional business network contact information with us, such as email header and body blocks from their business emails. Discover more about our community <a href="{{url('/community-program')}}">Here</a>.</p>
                   <p><strong>Google and Microsoft:</strong> Data is collectet from Google or Microsoft APIs when our End Users provide us access to their email account for the purposes of using our email composing services. More details are provided below.</p>
                   <p><strong>Our affiliates:</strong> We get contact information from affiliates, which include companies, parent businesses, partnerships, and other corporate entities that have common ownership.</p>
                   <p><strong>Third parties:</strong> We associated with business partners to collect company information and keep a certified registry of current firms. We utilise this information to guarantee that the data we collect from the above is only included to the B2B database if it refers to company details rather than personal contact details.</p>
                   <p><strong>Publicly available sources:</strong> With powerful technologies, our unique system examines publicly available sources and returns public information. For example, we utilise this to understand normal business email patterns, and we only use it after the verification process is complete.</p>
                   <p><a href="{{url('/data-sources')}}">Learn about our data sources.&nbsp;</a></p>
                   <h4><strong>3.2 It's End Users</strong></h4>
                   <p>what data we collect&nbsp;</p>
                   <p>We acquire information directly from our customers when they engage with us. This is the case, for example, when end users register an account, utilise our services, and contact us. The following information has been supplied or derived:</p>
                   <ul><li>Name</li><li>Professional email address, phone number, mailing address, location, and user activities.</li><li>If you utilise our recommendation service, you will receive your referred friend's professional email address and name.</li><li>Any additional information you willingly supply us while communicating with us.</li><li>We do not sell any of the information provided to us by our paying end Users, licensees, or customers.</li></ul>
                   <h4><strong>It's Integrations</strong></h4>
                   <p>As part of the Services, we allow our Licensees to integrate it with certain business platforms.</p>
                   <p><strong>Data our Payment Partner collects</strong></p>
                   <p>End users are requested to give their professional email address and payment details, including a credit card number, for paid-for Licensees. It's doesn't directly collect or process your payment information for this processing; payment processing is handled by reputable third-party service providers.</p>
                   <p><strong>3.3 End Users and Visitors</strong></p>
                   <p>We gather information supplied to us automatically by your computer, mobile phone, or other access device. This data set includes:</p>
                   <ul><li>Your device information such as the type of browser and operating system your device uses, your language preference, your domain name and the time you accessed the website</li><li>Mobile network information</li><li>IP address</li><li>Troubleshooting problem and bug alerts</li><li>When you are not signed into your account, this information is unknown to you, and we do not know the identify of the person from whom this information is obtained.</li></ul>
               </div>
               <div id="four" class="tab">
                   <h3>4. Additional Restrictions</h3>
                   <p>Regardless of anything else in this Privacy Policy, if you provide us access to your email account in order to use our email composing services, the following categories of your Google or Microsoft data will be subject to these extra restrictions:</p>
                   <p>This will only use access to read, write, modify, or control e - mail bodies, metadata, headers, and settings to allow end users to compose and process emails and will not transfer this data to others unless doing so is required to provide and improve these features, comply with applicable law, or as part of a merger, acquisition, or sale of assets. We shall not use this data for the purposes of delivering adverts, selling data, or any other purpose. Its usage and transfer of information obtained from Google APIs to any other app will comply with the Google API Services User Data Policy, including the Limited Use limitations.</p>
               </div>
               <div id="five" class="tab">
                   <h3>5. How we share your information</h3>
                   <p>We may share information with third parties in the means and for the reasons mentioned above.</p>
                   <p>With our End Users and Licensees (Company Contacts Only): We share Business Contacts maintained in our B2B Database with our End Users and Licensees in order to provide our Services and provide access to genuine, current, and available business contact information. Within it or with our Payment Partner: We may share your information within it. To the extent permitted by law and taking into account the protection of your rights and freedoms in relation to the processing of your Data, as well as the consent you have given (if any), your Data will only be accessible by a limited and defined number of recipients within it. Please assured&nbsp;that such access to your data will be solely on a "need to know" basis and will be subject to our internal privacy policy as well as a confidentiality requirement.</p>
                   <p>With our service providers: Your Data will normally not be given to anyone other than ourselves or our Payment Partner. In other circumstances, however, it employs external service providers to operate on its behalf under contracts that involve thorough data protection standards.</p>
                   <p>As part of our routine business operations, we will disclose your Data to service providers or suppliers. Among these service providers are:<br>(i) Hosting services providers<br>(ii) Data analytics providers<br>(iii) Payment processors<br>(iv) Security services providers </p>
                   <p>We may disclose your personal data. We may share your personal information when discussing or in relation to a change in corporate control. Other third parties and governmental authorities: In some instances, we may additionally share and disclose certain of your information if we think in good faith that such disclosure is necessary or required:</p>
               </div>
               <div id="six" class="tab">
                   <h3>6. How long do we keep your data?</h3>
                   <p>It has created a retention policy, establishing retention periods based on the type of information obtained and the purpose for which it was collected, while keeping in mind the situation's requirements and the necessity to discard old, unneeded material as soon as possible. We only preserve your Data for as long as is required for the above-mentioned objectives. We keep your data for as long as it takes to offer our services and then for as long as it takes to comply with our legal requirements, resolve disputes, and enforce our rules. It is our licensees' end users and other personal data.&nbsp;</p>
               </div>
               <div id="seven" class="tab">
                   <h3>7. How to Opt Out, Access, Correct, and/or Erasure Your Data</h3>
                   <p>By contacting our Privacy Team, you can have access to your personal information, modify or retrieve data gathered on you.</p>
                   <p>Please know that we retain an Opt-out list, which may include personal data, for the sole purpose of ensuring that opt-out requests are honoured and that your contact information does not appear in the B2B Database in the future if you have opted-out.</p>
                   <p><strong>Information and access to a copy of your Data: </strong>You may seek confirmation as to whether or not your Data is handled by it. You may obtain additional information about the ddata we possess and how your Data is processed, as well as a copy of your data, where appropriate.<br><strong>Rectification of your information: </strong>You may correct your Data if it is inaccurate, erroneous, or out of date. You may possibly have incomplete Data.<br><strong>Erasure of your Data:</strong> You may request that your Data be erased, for example, if you object to the processing of your data. However, depending on the circumstances, we may have legal or reasonable reasons to keep the data.<br><strong>Limitation of processing:</strong> You may request that your Data be limited, for example, in the event of an incident or audit. We shall label your Data in order to limit its future processing.<br><strong>Data portability:</strong> You may get the Data that you have submitted to it in a structured, frequently used, and machine-readable format, and you have the right to transmit this Data to another data controller without restriction from us. This right applies only if the processing of your Data is based on your permission or is Data you have submitted to us for the fulfilment of the Terms of Service. You may also object to specific uses of your Data.</p>
                   <p>To discontinue receiving marketing messages from us, you may request that we discontinue all direct marketing to you at any time. Any such emails from us will include a link or instructions for unsubscribing.</p>
                   <p><strong>For Minors: </strong>Its services are not aimed towards or intended for children under the age of 18. If we discover that a contact or end user is under the age of 18, we will delete such information. If you have reason to suspect that a child has submitted personal information with us, please <a href="{{url('/contact')}}">contact us&nbsp;</a></p>
               </div>
               <div id="eight" class="tab">
                   <h3>8. How do we transfer and protect your data??</h3>
                   <p>We shall take all reasonable efforts to ensure that your personal information is treated securely and in compliance with our privacy policy. Once we get your information, we take all necessary technological and organisational safeguards, reasonable precautions, and industry best practises to protect it against loss, theft, unauthorised use, access, or alteration.&nbsp;</p>
               </div>
               <div id="nine" class="tab">
                   <h3>9. Changes to this policy</h3>
                   <p>It may alter this privacy policy at any time to reflect changes in the way we process data. If we make material changes to this policy,&nbsp;we will notify you, as appropriate depending on the substance of the change, by email or by means of a notice on the main areas of our website such as homepage etc.</p>
               </div>
               <div id="ten" class="tab">
                   <h3>10. Contact us</h3>
                   <p>If you have any additional questions please feel to contact our privacy team. <a href="{{url('/contact')}}">Contact Now&nbsp;</a></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


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
@endsection

