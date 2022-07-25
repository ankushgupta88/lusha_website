@extends('layouts.after-login-master')

@section('content')

<section class="app"> 
 <div class="container-fluid">
     <div class="row">
        <div class="col-md-2 side-content">
            @include('layouts.sidebar')
        </div>
          <div class="col-md-9">
            <div class="content-main">
              <div class="app-content p-md-5 pt-5">
                  <div class="row align-items-center">
                    <div class="col-md-12">
                       <div class="content-title pb-5">
                           <h5 class="app-page-title mb-0"> Integrations </h5>
                       </div>
                    </div>
                <!--1-->
                    <div class="col-md-4">
                        <div class="integration-content-data shadow p-4 mb-4">
                          <div class="integration-content-title d-flex align-items-center">
                                <img src="{{url('public/assets/images/salesforce.png')}}" alt="Image"/>
                               <h6 class="fw-bold mb-0 ps-2"> Salesforce </h6> 
                           </div>
                           <p class="pt-2 mb-0"> Save your contacts to Salesforce directly from the plugin.</p>
                           <a href="#" class="fs-14 main-clr"> Learn more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> <br>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn app-btn-primary mt-4 w-100" data-bs-toggle="modal" data-bs-target="#connectModal">
                              Connect
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="connectModal" tabindex="-1" aria-labelledby="connectModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                       <img src="{{url('public/assets/images/salesforce.png')}}" alt="Image"/ class="pe-2">
                                    <h5 class="modal-title" id="connectModalLabel">Save to Salesforce is an Enterprise feature</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    connect your Salesforce account to save contacts directly to Salesforce
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn app-btn-primary">Contact Sales</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                <!--2-->
                    <div class="col-md-4">
                        <div class="integration-content-data shadow p-4 mb-4">
                          <div class="integration-content-title d-flex align-items-center">
                                <img src="{{url('public/assets/images/outreach.png')}}" alt="Image"/>
                               <h6 class="fw-bold mb-0 ps-2"> Outreach </h6> 
                           </div>
                           <p class="pt-2 mb-0"> Save your contacts to Outreach directly from the plugin.</p>
                           <a href="#" class="fs-14 main-clr"> Learn more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> <br>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn app-btn-primary mt-4 w-100" data-bs-toggle="modal" data-bs-target="#OutreachModal">
                              Connect
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="OutreachModal" tabindex="-1" aria-labelledby="OutreachModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                       <img src="{{url('public/assets/images/outreach.png')}}" alt="Image"/ class="pe-2">
                                    <h5 class="modal-title" id="OutreachModalLabel">Save to Outreach is an advanced feature</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    connect your Outreach account to save contacts directly to Outreach
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn app-btn-primary">Contact Sales</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                <!--3-->
                    <div class="col-md-4">
                       <div class="integration-content-data shadow p-4 mb-4">
                          <div class="integration-content-title d-flex align-items-center">
                                <img src="{{url('public/assets/images/Hubspot.png')}}" alt="Image"/>
                               <h6 class="fw-bold mb-0 ps-2"> Hubspot </h6> 
                           </div>
                           <p class="pt-2 mb-0"> Save your contacts to Hubspot directly from the plugin.</p>
                           <a href="#" class="fs-14 main-clr"> Learn more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> <br>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn app-btn-primary mt-4 w-100" data-bs-toggle="modal" data-bs-target="#hubspotModal">
                              Connect
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="hubspotModal" tabindex="-1" aria-labelledby="hubspotModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                       <img src="{{url('public/assets/images/Hubspot.png')}}" alt="Image"/ class="pe-2">
                                    <h5 class="modal-title" id="hubspotModalLabel">Save to Hubspot is an advanced feature</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    connect your Hubspot account to save contacts directly to Hubspot
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn app-btn-primary">Contact Sales</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                <!--4-->
                    <div class="col-md-4">
                        <div class="integration-content-data shadow p-4 mb-4">
                          <div class="integration-content-title d-flex align-items-center">
                                <img src="{{url('public/assets/images/pipedrive.png')}}" alt="Image"/>
                               <h6 class="fw-bold mb-0 ps-2"> Pipedrive </h6> 
                           </div>
                           <p class="pt-2 mb-0"> Save your contacts to Pipedrive directly from the plugin.</p>
                           <a href="#" class="fs-14 main-clr"> Learn more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> <br>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn app-btn-primary mt-4 w-100" data-bs-toggle="modal" data-bs-target="#pipedriveModal">
                              Connect
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="pipedriveModal" tabindex="-1" aria-labelledby="pipedriveModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                       <img src="{{url('public/assets/images/pipedrive.png')}}" alt="Image"/ class="pe-2">
                                    <h5 class="modal-title" id="pipedriveModalLabel">Save to Pipedrive is an advanced feature</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    connect your Pipedrive account to save contacts directly to Pipedrive
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn app-btn-primary">Contact Sales</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                <!--5-->
                    <div class="col-md-4">
                        <div class="integration-content-data shadow p-4 mb-4">
                          <div class="integration-content-title d-flex align-items-center">
                                <img src="{{url('public/assets/images/salesloft.png')}}" alt="Image"/>
                               <h6 class="fw-bold mb-0 ps-2"> Salesloft </h6> 
                           </div>
                           <p class="pt-2 mb-0"> Save your contacts to Salesloft directly from the plugin.</p>
                           <a href="#" class="fs-14 main-clr"> Learn more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> <br>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn app-btn-primary mt-4 w-100" data-bs-toggle="modal" data-bs-target="#salesloftModal">
                              Connect
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="salesloftModal" tabindex="-1" aria-labelledby="salesloftModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                       <img src="{{url('public/assets/images/salesloft.png')}}" alt="Image"/ class="pe-2">
                                    <h5 class="modal-title" id="salesloftModalLabel">Save to Salesloft is an advanced feature</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    connect your Salesloft account to save contacts directly to Salesloft
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn app-btn-primary">Contact Sales</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                <!--6-->
                    <div class="col-md-4">
                        <div class="integration-content-data shadow p-4 mb-4">
                          <div class="integration-content-title d-flex align-items-center">
                                <img src="{{url('public/assets/images/Zoho.png')}}" alt="Image"/>
                               <h6 class="fw-bold mb-0 ps-2"> Zoho CRM </h6> 
                           </div>
                           <p class="pt-2 mb-0"> Save your contacts to Zoho CRM directly from the plugin.</p>
                           <a href="#" class="fs-14 main-clr"> Learn more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> <br>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn app-btn-primary mt-4 w-100" data-bs-toggle="modal" data-bs-target="#connectModal">
                              Connect
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="connectModal" tabindex="-1" aria-labelledby="connectModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                       <img src="{{url('public/assets/images/Zoho.png')}}" alt="Image"/ class="pe-2">
                                    <h5 class="modal-title" id="connectModalLabel">Save to Zoho CRM is an advanced feature</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    connect your Zoho CRM account to save contacts directly to Zoho CRM
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn app-btn-primary">Contact Sales</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                <!--7-->
                    <div class="col-md-4">
                        <div class="integration-content-data shadow p-4 mb-4">
                          <div class="integration-content-title d-flex align-items-center">
                                <img src="{{url('public/assets/images/salesforce.png')}}" alt="Image"/>
                               <h6 class="fw-bold mb-0 ps-2"> Bullhorn </h6> 
                           </div>
                           <p class="pt-2 mb-0"> Save your contacts to Bullhorn directly from the plugin.</p>
                           <a href="#" class="fs-14 main-clr"> Learn more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> <br>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn app-btn-primary mt-4 w-100" data-bs-toggle="modal" data-bs-target="#connectModal">
                              Connect
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="connectModal" tabindex="-1" aria-labelledby="connectModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                       <img src="{{url('public/assets/images/salesforce.png')}}" alt="Image"/ class="pe-2">
                                    <h5 class="modal-title" id="connectModalLabel">Save to Bullhorn is an advanced feature</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    connect your Bullhorn account to save contacts directly to Zoho CRM
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn app-btn-primary">Contact Sales</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                <!--8-->
                    <div class="col-md-4">
                       <div class="integration-content-data shadow p-4 mb-4">
                          <div class="integration-content-title d-flex align-items-center">
                                <img src="{{url('public/assets/images/salesforce.png')}}" alt="Image"/>
                               <h6 class="fw-bold mb-0 ps-2"> Gmail </h6> 
                           </div>
                           <p class="pt-2 mb-0"> Join the EmailFinder community and help keep our database accurate and up-to-date</p>
                           <a href="#" class="fs-14 main-clr"> Go to community <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> <br>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn app-btn-primary mt-4 w-100" data-bs-toggle="modal" data-bs-target="#connectModal">
                              Connect
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="connectModal" tabindex="-1" aria-labelledby="connectModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                       <img src="{{url('public/assets/images/salesforce.png')}}" alt="Image"/ class="pe-2">
                                    <h5 class="modal-title" id="connectModalLabel">Save to Gmail is an advanced feature</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    connect your Gmail account to save contacts directly to Gmail
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn app-btn-primary">Contact Sales</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                <!--9-->
                    <div class="col-md-4">
                        <div class="integration-content-data shadow p-4 mb-4">
                          <div class="integration-content-title d-flex align-items-center">
                                <img src="{{url('public/assets/images/salesforce.png')}}" alt="Image"/>
                               <h6 class="fw-bold mb-0 ps-2"> Outlook </h6> 
                           </div>
                           <p class="pt-2 mb-0"> Join the EmailFinder community and help keep our database accurate and up-to-date</p>
                           <a href="#" class="fs-14 main-clr"> Go to community <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> <br>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn app-btn-primary mt-4 w-100" data-bs-toggle="modal" data-bs-target="#connectModal">
                              Connect
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="connectModal" tabindex="-1" aria-labelledby="connectModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                       <img src="{{url('public/assets/images/salesforce.png')}}" alt="Image"/ class="pe-2">
                                    <h5 class="modal-title" id="connectModalLabel">Save to Outlook is an advanced feature</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    connect your Outlook account to save contacts directly to Gmail
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn app-btn-primary">Contact Sales</button>
                                  </div>
                                </div>
                              </div>
                            </div>
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
