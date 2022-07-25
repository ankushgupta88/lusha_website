@extends('layouts.master2')

@section('content')
<!--banner section-->
    <section class="banner_section_main integrations_banner">
        <div class="container-fluid">
         <div class="row align-items-center">
             <div class="col-md-6">
                 <div class="banner_text  text-center text-md-start">
                     <span style="color:#f7f9fc;font-size:17px;font-weight: 600;">Integration</span>
                     <h1 class="hero__title fw-bold"><span style="color: #FFB116;">Connect</span> now with your tools</h1>
                     <img src="{{url('public/assets/images/pexels-kampus-production.jpg')}}" alt="Image"/ class="img-fluid">
                     <p class="hero__subtitle">Integrate with any tool in under 60 seconds and accelerate your processes with a single click.</p>
                     <div class="banner-email mt-4">
                    @if(Auth::user())
                      <div class="my-account-btn find_talent">
                        <a href="{{url('/dashboard')}}"><button style="background:#f71966 !important;" class="btn account_btn py-3">Button Text </button></a>
                      </div> 
                    @else
                      <div class="my-account-btn find_talent">
                        <a href="{{url('/register')}}"><button style="background:#f71966 !important;" class="btn account_btn py-3">Button Text </button></a>
                      </div>
                    @endif 
                 </div>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="banner-img">
                     <img src="{{url('public/assets/images/pexels-kampus-production.jpg')}}" alt="Image"/ class="img-fluid">
                 </div>
             </div>
         </div>
        </div>
    </section>
    
<!--improve sale section-->
<section class="improve_sale">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="accordian_caption">
                  <div class="main_title text-center">
                   <h1 class="main-title-text fw-bold">Improve your sales</h1>
                   <p>Integrations manage all of your data collection, giving you more time to engage and convert more prospects.</p>
                  </div>
                </div>
            </div>
        </div>
        <div class="row improve_sale_row">
            <div class="col-md-4">
                <div class="improve_sale_inner">
                    <img src="{{url('public/assets/images/icon-outreach.png')}}" alt="Image"/ class="img-fluid">
                    <h2>Outreach</h2>
                    <p>Users can connect to guarantee that every lead is saved in the correct order. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="improve_sale_inner">
                    <img src="{{url('public/assets/images/icon-salesforce.png')}}" alt="Image"/ class="img-fluid">
                    <h2>Salesforce</h2>
                    <p>Connect and store the leads or contacts data to the appropriate Salesforce field  </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="improve_sale_inner">
                    <img src="{{url('public/assets/images/icon-salesloft.png')}}" alt="Image"/ class="img-fluid">
                    <h2>Salesloft</h2>
                    <p>Integrate and store leads and data. And you’ll be able to connect with buyers more quickly.</p>
                </div>
            </div>
        </div>
        <div class="row improve_sale_row">
            <div class="col-md-4">
                <div class="improve_sale_inner">
                    <img src="{{url('public/assets/images/icon-hubspot.png')}}" alt="Image"/ class="img-fluid">
                    <h2>Outreach</h2>
                    <p>Integrate to increase the effectiveness of your customer relationship management.   </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="improve_sale_inner">
                    <img src="{{url('public/assets/images/bullhorn.png')}}" alt="Image"/ class="img-fluid">
                    <h2>Salesforce</h2>
                    <p>Connect and enroll the appropriate candidate in the appropriate tracking procedure.   </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="improve_sale_inner">
                    <img src="{{url('public/assets/images/icon-pipedrive.png')}}" alt="Image"/ class="img-fluid">
                    <h2>Salesloft</h2>
                    <p>Connect and automate your operations. Save prospect lists in bulk to your database.</p>
                </div>
            </div>
        </div>
        <div class="row improve_sale_row">
            <div class="col-md-4">
                <div class="improve_sale_inner">
                    <img src="{{url('public/assets/images/icon-zoho-1.png')}}" alt="Image"/ class="img-fluid">
                    <h2>Outreach</h2>
                    <p>Connect and save more relevant leads to your zoho database and convert leads into opportunities. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="improve_sale_inner">
                    <img src="{{url('public/assets/images/icon-zapier-2.png')}}" alt="Image"/ class="img-fluid">
                    <h2>Salesforce</h2>
                    <p>Connect to make admin duties easier. Using Zapier, streamline all of your processes. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="improve_sale_inner">
                    <img src="{{url('public/assets/images/icon-gmail.png')}}" alt="Image"/ class="img-fluid">
                    <h2>Salesloft</h2>
                    <p>Prospect directly from your gmail inbox and acquire correct contact and company information.</p>
                </div>
            </div>
        </div>
        <div class="row improve_sale_row">
            <div class="col-12 improve_sale_last">
                <div class="improve_sale_inner">
                    <img src="{{url('public/assets/images/icon-outlook-1.png')}}" alt="Image"/ class="img-fluid">
                    <h2>Outreach</h2>
                    <p>Connect and work directly from your email inbox. And keep data up to date with a simple click.</p>
                </div>
            </div>
        </div>
    </div>
</section>
 
 
 
 <!--benefits section-->
    <section class="benefits-section benefits-integrations benefits-section3 block-space block-space-bottom">
     <div class="container-fluid">
         <div class="row">
             <div class="accordian_caption">
                 <div class="main_title text-center">
                   <h1 class="main-title-text fw-bold">How it works</h1>
                   <p>Find the most up-to-date information and always work with the most current database.</p>
                 </div>
              </div>
         </div>
         <div class="row">
             <div class="col-lg-3">
                 <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                    <h2>Step 01:</h2>
                    <p class="mb-0"> Connect to CRM and use it to narrow down your search results.</p>
                 </div>
             </div>
             <div class="col-lg-3">
                 <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                    <h2>Step 02:</h2>
                    <p class="mb-0"> Enrich in bulk Hundreds of contacts in a single cycle</p>
                 </div>
             </div>
             <div class="col-lg-3">
                 <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                    <h2>Step 03:</h2>
                    <p class="mb-0"> Bulk Save the list to CRM and fill your database with it</p>
                 </div>
             </div>
             <div class="col-lg-3">
                 <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                    <h2>Step 04:</h2>
                    <p class="mb-0"> Make use of the these lists to schedule meetings.</p>
                 </div>
             </div>
         </div>
     </div>
    </section>
    
    
<!--Integrate & Improve your work section-->

<section class="boost_revenue integrations_revenue">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="revenue_content horizons">
                    <p><i class="fa fa-gg" aria-hidden="true"></i>Integration</p>
                    <h2>Integrate & Improve your work</h2>
                    <p>Integrations manage all of your data collection, giving
you more time to engage and convert more prospects.</p>
                    <div class="revenue_button">
                      @if(Auth::user())
                        <a href="{{url('/integrations')}}"><button style="background:#f71966;" class="btn more_details py-3">Start Integration</button></a>
                    @else
                        <a href="#"><button style="background:#f71966;" class="btn more_details py-3">Start Integration</button></a>

                    @endif
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
    
    
@endsection