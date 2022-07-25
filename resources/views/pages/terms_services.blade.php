@extends('layouts.master2')
@section('content')
<style>
   #two,#three,#four,#five,#six,#seven,#eight,#nine,#ten,#eleven,#twelve,#thirteen,#fourteen,#fifteen,#sixteen {
   display: none;
   }
</style>
<!--banner section-->
<section class="banner_section_main faq_banner">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-8">
            <div class="banner_text  text-center text-md-start">
               <h1 class="hero__title fw-bold">Terms Of<span style="color: #FFB116;"> Service</span></h1>
               <p class="hero__subtitle">Read and adhere to our terms of service. If you have any further questions, please contact us.</p>
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
               Software as a Service
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("two")) id="twoBtn">
               Creating an Account
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("three")) id="threeBtn">
               Changes to the Terms
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("four")) id="fourBtn">
               Support Services
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("five")) id="fiveBtn">
               Intellectual Property Rights
               <button class="sidebarBtn" onclick=(switchTabs("six")) id="sixBtn">
               Licensee Obligations
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("seven")) id="sevenBtn">
               Confidentiality
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("eight")) id="eightBtn">
               Warranties
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("nine")) id="nineBtn">
               Disclaimer of Warranties
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("ten")) id="tenBtn">
               Limitation of Liability
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("eleven")) id="elevenBtn">
               Consideration; Tax
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("twelve")) id="twelveBtn">
               Subscription Auto-Renewals
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("thirteen")) id="thirteenBtn">
               Term; Termination
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("fourteen")) id="fourteenBtn">
               Arbitration Procedures
               </button>
               <button class="sidebarBtn" onclick=(switchTabs("fifteen")) id="fifteenBtn">
               Miscellaneous
               </button><button class="sidebarBtn" onclick=(switchTabs("sixteen")) id="sixteenBtn">
               Contact Us
               </button>
            </div>
         </div>
         <div class="col-md-9">
            <div class="content">
               <div id="one" class="tab">
                  <p>These terms of service ("Terms") are a legally binding agreement between our platform and you ("Licensee" or "you") that qualify the legal basis for your access and use of its specialised online software that assists businesses in discovering business profiles by providing information about business professionals and companies (the "Data") retained in our B2B database, accessible on a software as a service basis. Any feature, functionality, data, or information included inside is referred to as a "service."</p>
                  <h3><strong>Software as a Service</strong>.</h3>
                  <p>Subject to the terms and conditions of these Terms, it grants to Licensee a non-exclusive, non-sublicensable, non-transferable, and limited right to use and access the Solution solely for Licensee's internal business use and for Licensee's own operations to such number of end users and limited to such number of credits by which the Licensee can receive data through the use of the solution, all as specified in the applicable subscription period.</p>
                  <p>The term <strong>"End User"</strong> refers to a single individual user who has registered to the Solution using access supplied by the Licensee's administrator. Anyone who utilises the Solution in accordance with the Agreement must be designated as an end user.The Licensee is exclusively responsible for end user access to the Solution, and it is the licensee's unique obligation to add or remove end user access privileges. Subject to the limits set out below, the licensee may continue to use the data following the termination of the agreement.</p>
               </div>
               <div id="two" class="tab">
                  <h3>Creating an Account.</h3>
                  <p>To use the services completely, you must first signup and have an account on this site. You guarantee that your account information will be kept private and safe. You also agree to alert us immediately if your account is used in an illegal manner. Accepting the terms indicates that you accept responsibility for any activity under your account. When you create an account, you will be added to our mailing list right away. You may unsubscribe from that mailing list by clicking the "unsubscribe" link at the bottom of every email we send you. We retain the right, at any time and for any reason, to cancel your access to the services and end your account. All regulations of these Terms that, by their nature, should survive termination, discontinuation, or cancellation of Services or your account, including, without limitation, licence and ownership provisions, warranty disclaimers, limitations of liability, indemnity, and dispute resolution provisions, will survive.</p>
               </div>
               <div id="three" class="tab">
                  <h3>Changes to the Terms.</h3>
                  <p>We reserve the right, at any time and for any reason, to modify, change, suspend, or discontinue the Solution, Services, or any portion thereof (the "Changes") with or without notice and without liability, including without limitation any changes that may be done automatically for the purpose of improving, enhancing, or debugging versions of the solution or other aspects of the Services. We will notify you of any significant changes made to the site or Services before they become effective. Otherwise, any other non-material change will take effect on the "last updated" date mentioned at the top of these Terms.</p>
                  <p>Your continued use of the Solution or Services following any such revisions constitutes your unconditional and permanent acceptance of such Changes. If you do not agree with the new/modified Terms, your sole alternative is to discontinue use of the Solution and Services and cancel your registration.</p>
               </div>
               <div id="four" class="tab">
                  <h3>Support Services.</h3>
                  <p>It will provide adequate assistance to the Services. It created a number of tools to aid users in answering frequently asked questions as well as supplementary technical and general support issues. Furthermore, it puts frequent updates, maintenance, issue resolution, and other approaches to the test in order to improve the Services. It does not, however, guarantee to maintaining any of the foregoing functioning and has the right to change, reduce, limit, or cancel its maintenance and support activities.</p>
               </div>
               <div id="five" class="tab">
                  <h3>Intellectual Property Rights.</h3>
                  <p>It owns all intellectual property rights in the Database, the Solution, and any portion thereof, as well as any derivatives, updates, and upgrades. Its profiles may include links to other websites (referred to as "Linked Sites"). It neither endorses nor is affiliated with the Linked Sites, and it accepts no responsibility for their content. Licensee shall not use any of its trade names, trademarks, service marks, brands, or logos, or any link, for any purpose other than in connection with this Agreement, including, without limitation, in any communications utilising Data from it, without its prior written authorization.&nbsp;</p>
               </div>
               <div id="six" class="tab">
                  <h3>Licensee Obligations.</h3>
                  <p>The Licensee will not, and will not allow any third party to,<br>(i)I attempt to interfere with the Solution, infiltrate, reverse engineer, decompile, or disassemble the Solution or the Database<br>(ii) Use the Data for purposes other than the Licensee's internal business purposes which includes marketing to prospective and current licensees or recruitment purposes<br>(iii) Publish, distribute, share, sell, lease, transfer, or otherwise make the Data available<br>(iv) Sublicense its right to access and use the Solution, or provide remote access to the Solution to or for the benefit of any third party or unauthorised person; (v) Use the data to compile similar databases or services<br>(vi) Use the solution to determine a customer's eligibility for credit or insurance for personal, family, or household purposes, employment, or governmental licence or benefit, or for any purpose covered by the fair credit Reporting Act; or <br>(vii) Violate the Fair Credit Reporting Act<br>(ix) Use the Solution or the Data in violation of any applicable law or in any way that promotes illegal activities, including, but not limited to, privacy and data protection laws and SPAM laws; <br>(x) Disparage or misrepresent its capabilities or reputation; and <br>(xi) Disclose the source of the Data provided by it.</p>
               </div>
               <div id="seven" class="tab">
                  <h3>Confidentiality.</h3>
                  <p>Regardless of the manner in which it is furnished, each party may have access to certain non-public proprietary, confidential information or data of the other party that, given the totality of the circumstances, a reasonable person or entity should have reason to believe is proprietary, confidential, or competitively sensitive (collectively, the "Confidential Information"). To be clear, the fact that the parties entered into this Agreement, as well as the contents of this Agreement, are considered Confidential Information. Any information that is not confidential should be excluded from the definition of Confidential Information. <br>(i) Is now or later becomes generally available in the public domain through no fault or breach on the part of the receiving party; <br>(ii) The receiving party can demonstrate in its records to have had rightfully in its possession prior to the disclosing party's disclosure of the confidential information; <br>(iii) The receiving party rightfully obtains from a third party who has the right to transfer or disclose it, without default or breach of this agreement; or <br>(iv) The receiving party : The receiving party agrees: (a) Not to disclose the disclosing party's confidential information to any third party other than its directors, officers, employees, advisors, or consultants (collectively, the "Representatives") on a strict "need to know" basis, provided that such representatives are bound by written agreements to comply with confidentiality obligations as protective as those contained herein; and (b) not to use or reproduce any of the disclosing party's information for any purposes except to carry out its rights and responsibilities under the agreement; and (c) to keep the disclosing party’s confidential information confidential using at least the same degree of care it uses to protect its own confidential information, which shall in any event not be less than a reasonable degree of care. Notwithstanding the foregoing, if receiving party is required by legal process or any applicable law, rule or regulation, to disclose any of disclosing party’s confidential information, then prior to such disclosure, receiving party will give prompt written notice to disclosing party so that it may seek a protective order or other appropriate relief.</p>
               </div>
               <div id="eight" class="tab">
                  <h3>Warranties</h3>
                  <p>Each party represents and warrants that;<br>(i) These Terms and any accompanying Purchase Orders issued in accordance with these Terms are a legal, valid, and binding obligation enforceable against it in accordance with the terms of this agreement, and <br>(ii) the execution and delivery of the Agreement, as well as its performance hereunder, will not violate any applicable law, rule, or regulation. Furthermore, Licensee represents and certifies that it is not a data broker.</p>
               </div>
               <div id="nine" class="tab">
                  <h3>Disclaimer of Warranties.</h3>
                  <p>It Provides the Solution and The Data to The Licensee "As Is," Without Warranties of Any Kind, Express or Implied, Including the Warranty of Title, Merchantability, Non-Infringement, Fitness for A Particular Purpose, Or Accuracy. Neither the Solution, The Data, Nor Any Services Related Thereto Are Warranted to Be Delivered or Performed Error-Free or Without Interruption. It Functions as A Search Platform. The Majority of The Information It Provides Was Not Created Directly by It. But Is Retrieved from The Web or From the Contribution of Applicable Data from Other Users and Business Partners, And as Such, It and Its Content Providers Shall Have No Legal Liability or Responsibility for The Accuracy or Completeness of Any Data Provided Through Use of The Solution. Licensee Assumes All Responsibility and Risk for The Use of The Solution and The Data.</p>
               </div>
               <div id="ten" class="tab">
                  <h3>Limitation of Liability.</h3>
                  <p>It will not be liable for lost profits, lost usage, lost data, the cost of procuring alternative products or services, or any other special, incidental, indirect, or consequential damages.</p>
               </div>
               <div id="eleven" class="tab">
                  <h3>Consideration;&nbsp;Tax.</h3>
                  <p>Certain it Services may be subject to the payment of fees ("Fee(s)"), as exclusively determined by it ("Paid Services"). It will inform you of any Fees that are currently in effect for such Services. Any consideration charge for the Service is due and payable in advance, unless otherwise mentioned in the Purchase Order, and must be paid by credit card in accordance with the instructions.</p>
                  <p>It has the right to adjust its Fees at any time and will tell you if such a change may affect your existing subscriptions. If you received a discount or other special offer, it shall have the right to automatically and without notice renew your membership to such it Service(s) at the full applicable Fee. All payments must be made in US currency. To the extent permitted by law, all Fees are exclusive of all taxes (including value-added tax, sales tax, goods and services tax, and so on), levies, or duties imposed by taxing authorities ("Taxes"), and you agree to pay all applicable Taxes in connection with your use of the Services or any payments or purchases made by you.&nbsp;&nbsp;</p>
                  <p>If the Fee is not paid by the due date, it may suspend or terminate Licensee's access to the Solution. Your use of it Services will be discontinued until you re-subscribe for any such services and pay all applicable Fees in full, including any fees and expenses paid by it or / and any Third - Party partners for each Chargeback received. We reserve the right to contest any Chargeback received, including by providing any information and documentation proving that the User responsible for such Chargeback did, in fact, authorise the transaction and use the services rendered as a result of it to the relevant credit card company or financial institution.</p>
               </div>
               <div id="twelve" class="tab">
                  <h3>Subscription Auto-Renewals.</h3>
                  <p>To ensure that you do not experience any interruption or loss of services, certain Paid Services include an automatic renewal option by default, which means that such Paid Services will automatically renew upon the end of the applicable subscription period, for a renewal period equal in time to the original subscription period, and, unless otherwise notified to you, at the same price subject to applicable Taxes changes and exclusions. For example, if the initial subscription duration for a Service is one year, each of its renewal periods (where applicable) will be one year. As a result, if relevant,It will attempt to bill you the appropriate Fees using the same method of payment up to two (2) weeks before the renewal term begins. In the event that we are unable to collect the Fees owing by you, we may but are not bound to retry to collect at a later time and/or suspend or deactivate your user account without further notice. If your Renewing Paid Service is subject to a yearly or multi-year subscription period.</p>
               </div>
               <div id="thirteen" class="tab">
                  <h3>Term; Termination&nbsp;</h3>
                  <p>This Agreement takes effect on the day the Licensee pays the Fee and remains in effect for the subscription period and any subsequent subscription periods. You have the right to cancel this agreement/services at any time. The effective date and time of such cancellation shall be the date and time on which you completed the cancellation procedure on the it Services, and the effective date and time of cancellation of Paid Services shall be at the end of the subscription month for such Paid Services.</p>
                  <p>Notwithstanding anything to the contrary in the above, subscriptions to Renewing Paid Services shall be terminated only following the end of the corresponding period for which you have already made payment. Please keep in mind that, because the cancellation procedure might take a few days, in order to avoid the next automatic renewal and associated charges, the cancellation request must be submitted at least (14) days before the expiry of the then-current service period.</p>
               </div>
               <div id="fourteen" class="tab">
                  <h3>Arbitration Procedures</h3>
                  <p>Both parties agree that any disputes shall be addressed by final and binding arbitration under the parameters outlined below. Before filing a claim, both parties undertake to try to discuss the dispute informally and commit to making reasonable efforts to contact each other in order to resolve any claim before taking any formal action. If a disagreement is not resolved after 15 days of the original dispute notification, either party may initiate the arbitration procedure indicated below. The parties agree to go to arbitration in order to settle the matter quickly and efficiently, while also limiting the costs placed on them.</p>
                  <p>If the country of incorporation of the Licensee is the United States, the parties agree that the arbitration will be administered by the American Arbitration Association ("AAA") in accordance with its Commercial Arbitration Rules and Supplementary Procedures for Consumer-Related Disputes in effect at the time arbitration is sought. These regulations are available at www.adr.org. In accordance with those rules, the arbitration will be handled on an individual basis by a single arbitrator. Both parties further agree that the arbitration will take place in New York, New York, or, at the Licensee's discretion, over the phone or through other remote electronic techniques. All arbitration fees will be reimbursed in line with AAA rules.</p>
                  <p>If Licensee was formed in a country other than the United States, the parties agree that any dispute arising out of or in connection with this Agreement, including any question concerning its existence, validity, or termination, shall be referred to and finally resolved by arbitration under the LCIA Rules, which Rules are deemed to be incorporated by reference into this Section. There will only be one arbitrator. As the seat or legal location, the arbitration shall be held in London, England. The arbitral procedures would be conducted in English. The substantive law of England shall be the contract's prevailing law.</p>
               </div>
               <div id="fifteen" class="tab">
                  <h3>Miscellaneous</h3>
                  <p>These Terms represent the parties' complete understanding of the subject matter hereof and replace all earlier and concurrent written agreements and discussions on the subject matter of this Agreement. If there is a discrepancy between the Agreement and a Purchase Order, the Terms will take precedence. Licensee accepts that it&nbsp;may reveal that Licensee is a customer of our platform. During the term of this Agreement, the Licensee allows it&nbsp;permission to use the Licensee's corporate name and logo in marketing materials and on Lusha's website until the Licensee's usage of the Solution is terminated.</p>
               </div>
               <div id="sixteen" class="tab">
                  <h3>Contact Us</h3>
                  <p>If you have any additional question please feel free to<a href="{{url('/contact')}}"> contact us</a>.&nbsp;</p>
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