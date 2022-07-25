@extends('layouts.after-login-master')

@section('content')

<section class="app"> 
 <div class="container-fluid">
     <div class="row">
        <div class="col-md-2 side-content shadow">
            @include('layouts.sidebar')
        </div>
          <div class="col-md-9">
            <div class="content-main lusha-community-cont ">
              <div class="app-content p-md-5 pt-4">
                  <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="lusha-lab-image text-center mb-4 mb-md-5">
                        <img src="{{url('public/assets/images/labs-img.png')}}" alt="Labs Image" class="img-fluid"/>
                        
                    </div>
                </div>
                <div class="col-xl-7 col-lg-10 col-md-12 col-12 mx-auto mb-4">
                <div class="text-center community-text-cnt p-0">
                  <div class="container community-text-bg bg-yellow p-4 p-md-5">
                    <div class="">
                         <h2 class="fw-bold">Lusha Labs</h2>
                        <p class="m-0">Try out our beta features before they're released to everyone!</p>
                    </div>
                  </div>
                 </div>
                 </div>
                 
                </div>
                    <div class="col-xl-7 col-lg-10 col-md-12 col-12 mx-auto mb-4">
                        <div class="integration-content-data border p-4 my-3 d-flex justify-content-between align-items-center community-text-cnt">
                            <div>
                          <div class="integration-content-title d-flex align-items-center">
                               <h6 class="fw-bold mb-0">Usage Analytics</h6> <div id="activestatus" class="ms-2 ps-2">
                                    Active
                                    </div>
                           </div>
                           <p class="pt-2 mb-0">Completely new dashboard experience. View how your team has been using Lusha and get ICP-level insights.</p>
                            </div>
                                <div class="form-check form-switch">
                                    <input onclick="activestatus_func()" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                    
                                </div>
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
                </div>
              </div>
            </div>
        </div>
     </div>
 </div>
</section>





@endsection
