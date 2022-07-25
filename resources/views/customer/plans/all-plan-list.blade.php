@extends('layouts.master2')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
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


/* Container Tooltip */
.tooltip,.tooltip1,.tooltip2,.tooltip3,.tooltip4,.tooltip5 {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 40px;
    cursor: pointer;
  margin-top:100px;
      display: contents;

}

/* Style text tooltip */
.tooltipText,.tooltipText1,.tooltipText2,.tooltipText3,.tooltipText4,.tooltipText5 {
    background-color: #111;
    position: absolute;
    bottom: 130%;
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 14px;
    opacity: 0;
    color:#fff;
    transition: all .5s;
}

.fb {color: #fff;}



/*  Membuat dan style tip*/
.tooltipText::after,.tooltipText1::after,.tooltipText2::after,.tooltipText3::after,.tooltipText4::after,.tooltipText5::after{
    content: '';
    border-width: 5px;
    border-style: solid;  
    border-color: #000 transparent transparent transparent;
    position: absolute;
    top: 97%;
    left: 40%;
    margin-left: 5%;
    color: #000 !important;
}

/* Style Icon */
.infoTooltip i ,.infoTooltip1 i,.infoTooltip2 i,.infoTooltip3 i,.infoTooltip4 i,.infoTooltip5 i
 {
    /*color: #fff;*/
    font-size: 20px;
}
button.btn.app-btn-success.w-100.current_plan {
    background-color: rgb(197, 197, 197);
    border: 1px solid rgb(197, 197, 197);
}

/* Hover text tooltip */
.tooltip:hover .tooltipText ,.tooltip1:hover .tooltipText1,.tooltip2:hover .tooltipText2,.tooltip3:hover .tooltipText3,.tooltip4:hover .tooltipText4,.tooltip5:hover .tooltipText5{
    opacity: 1;
    transform: translateY(-10px);
}

/* Hover Background icon */
.facebook:hover i,.facebook1:hover i,.facebook2:hover i,.facebook3:hover i,.facebook4:hover i,.facebook5:hover i{
    background-color: #3B5998;
}


</style>
<!--banner section-->
<section class="banner_section_main career_banner pricing_banner">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-12">
            <div class="banner_text  text-center text-md-start">
               <h1 class="hero__title fw-bold ">Connect with your targets instantly</h1>
            </div>
         </div>
      </div>
   </div>
</section>
    <section class="app plans_main py-5"> 
     <div class="container-fluid container-width">
         <div class="row">
             <div class="col-md-12 mb-2 mb-md-5">
                 <div class="main-title text-center">
                     <h4 class="main-title-text fw-bold "> Instantly connect with your leads </h4>
                     
                 </div>
             </div>
             
             <!--1-->
             @foreach($plan as $upgrade_plan)

               <div class="col-lg-3 col-md-6 col-12">
                <div class="pricing-plan-content shadow-inner p-4 mb-5 mb-lg-0 heigth-100 position-relative">
                   <div class="pricing-title text-center pb-1">
                       <div class="planes_inner_content">
                           <h4 class="main-clr m-0 fw-bold">{{$upgrade_plan->plan_name}}</h4>
                           <p class="fs-12 pt-1">{{$upgrade_plan->plan_type}}</b></p>
                       </div>
                       @if(empty($upgrade_plan->price))
                        <h4 class="plan_yr my-3 fw-bold">{{$upgrade_plan->billing_style}} </h4>
                       @elseif(empty($upgrade_plan->price))
                        <h4 class="plan_yr my-3 fw-bold">{{$upgrade_plan->billing_style}} </h4>
                       @else
                       <h4 class="plan_yr my-3 fw-bold"> ${{$upgrade_plan->price}}/<span class="fs-12 fw-normal"> {{$upgrade_plan->billing_style}}  <del class="badge bg-danger fw-normal"> ${{$upgrade_plan->actual_price}}/mo </del> </span> </h4>
                      @endif
                   </div>
                   <div class="plan-button text-center">
                        <h6 class="pricing-plan-title py-2 mb-3"> <i class="fa fa-credit-card pe-2" aria-hidden="true"></i> <b> {{$upgrade_plan->credits}}</b></h6>
                       
                 
                          <a href="{{url('/checkout',$upgrade_plan->id)}}">
                          <button class="btn app-btn-success w-100  <?= (@$current_plan['plan_id'] == $upgrade_plan->id)?"current_plan":'' ?>"> Choose plan </button></a>

                   </div>
                   <div class="pricing-body pt-4">
                       <p> <b> {{$upgrade_plan->plan_name}} </b> plan includes : </p>
                       <ul class="list-unstyled list-cstm m-0">
                        <?php
                            echo $upgrade_plan->description;
                         ?>
		                  </ul>
                   </div>
                   @if($upgrade_plan->discount)
                   <div class="sticker-wrapper">
                      <div class="sticker text-uppercase fw-bold text-center">Get {{$upgrade_plan->discount}}% off</div>
                   </div>
                   @endif
                </div>
              </div>
          @endforeach
  
            
         </div>
     </div>
    </section>
    
    <!--faq section-->
     <section class="accordian">
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
                           What are the credits on our platform?
                           </a>
                        </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                           <p>Credits are a system of currency at our platform</p>
                           <p>You used one credit when you clicked the show contact button. A credit gives you access to any phone numbers and email addresses we have for that contact, according to the information in our database.</p>
                           <p><strong>1 credit = 1 profile contact details</strong></p>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                           Difference between price plans?
                           </a>
                        </h4>
                     </div>
                     <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                           <p>Depending on your company's requirements, each plan provides a different number of credits and features.</p>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                           Why can't I use my email address to sign up?
                           </a>
                        </h4>
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                           <p>You are not allowed to sign up unless you have a business email address. Do not attempt to create an account using email addresses such as gmail, Yahoo, or Hotmail, or with general business addresses such as <strong>info@pearrr.com, team@pearrr.com, or admin@pearrr.com </strong></p>
                           <p>You can create an account by using a business email address such as <strong>johan@doe.com.</strong></p>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
                           Can we integrate it with my CRM?
                           </a>
                        </h4>
                     </div>
                     <div id="collapsefour" class="panel-collapse collapse">
                        <div class="panel-body">
                           <p>You can integrate with the followings, and also we are working to add more</p>
                           <ul>
                               <li>HubSpot</li>
                               <li>Salesforce</li>
                               <li>Pipedrive</li>
                               <li>Outreach</li>
                               <li>SalesLoft</li>
                               <li>Zoho </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
                           Can we utilise your platform for large team sizes?
                           </a>
                        </h4>
                     </div>
                     <div id="collapsefive" class="panel-collapse collapse">
                        <div class="panel-body">
                           <p>Yes. If you are 5+ users, please contact our sales team so that they can design a perfectc plan for you.</p>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsesix">
                           Will my plan automatically renew?
                           </a>
                        </h4>
                     </div>
                     <div id="collapsesix" class="panel-collapse collapse">
                        <div class="panel-body">
                           <p>Yes, your plan will automatically renew, and your monthly or yearly credits will be issued.</p>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseseven">
                          Do unused credits roll over to the next month?
                           </a>
                        </h4>
                     </div>
                     <div id="collapseseven" class="panel-collapse collapse">
                        <div class="panel-body">
                           <p>Yes, your unused credits will be rolled over to the next month. As long as you are a subscriber to our service.</p>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseeight">
                          Is the data GDPR-aligned and CCPA-compliant?
                           </a>
                        </h4>
                     </div>
                     <div id="collapseeight" class="panel-collapse collapse">
                        <div class="panel-body">
                           <p>Yes, our data is committed to and in accordance with the GDPR and CCPA regulations.</p>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsenine">
                          How we are different from other tools?
                           </a>
                        </h4>
                     </div>
                     <div id="collapsenine" class="panel-collapse collapse">
                        <div class="panel-body">
                           <p>Signing up for our tool is much simpler, and it is completely free without the use of a credit card. You can begin collecting prospect contact data as soon as you sign up. Our tool is far too simple and straightforward. There is no complicated functionality required to register an account or utilise our tools.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


@endsection
