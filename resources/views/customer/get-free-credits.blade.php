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
              <div class="app-content p-md-5 pt-5">
                  <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="coin-image text-center mb-5">
                        <h1 class="main-title-text fw-bold">How To Get More Lusha Credits</h1>
                        <img src="{{url('public/assets/images/coins.jpg')}}" alt="Image" class="img-fluid w-25"/>
                        
                    </div>
                </div>
                <div class="text-center community-text-cnt p-0">
                  <div class="container community-text-bg p-5">
                    <div class="">
                         <h2 class="fw-bold">Join the Lusha</br>
                        Community</h2>
                        <p>Become a member - <b>Get 25 credits</b> now and <b>15 credits</b> each month.</p>
                        <a href="{{url('/plans')}}"><button type="#" class="btn main-btn">Get Credits Now</button></a>
                    </div>
                  </div>
                 </div>
                </div>
                    <div class="col-md-12">
                        <div class="integration-content-data shadow p-4 my-3 d-flex justify-content-between align-items-center community-text-cnt">
                            <div>
                          <div class="integration-content-title d-flex align-items-center">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                               <h6 class="fw-bold mb-0 ps-2">Invite your friends to Lusha</h6> 
                           </div>
                           <p class="pt-2 mb-0">Invite your friends to Lusha, and get up to 25 credits.</p>
                            </div>
                            <div>
                                <button type="button" class="btn app-btn-primary w-100" data-bs-toggle="modal" data-bs-target="#connectModal">
                             Get credits
                            </button>
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
                                    <a href="{{url('/plans')}}"><button type="button" class="btn app-btn-primary">Contact Sales</button></a>
                                    
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



