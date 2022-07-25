@extends('layouts.after-login-master')

@section('content')


<section class="app"> 
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-2 side-content shadow">
            @include('layouts.sidebar')
        </div>
          <div class="col-md-9">
 <div class="container-fluid">
     <div class="row">
          <div class="col-md-6 mx-auto">
             <div class="help-center-content py-md-5">
                 <div class="banner-text text-center pb-4">
                     <h2 class=" fw-bold">Advice and answers from the Lusha Team</h2>
                 </div>
              <form class="d-flex">
                <input type="text" class="live-search-box form-control me-2 p-3" placeholder="Search for countries..." />
                <button class="btn btn-primary-outline" type="submit">Search</button>
              </form><br>

              <div class="live-search-list">
                <!-- 1 -->
                <div>
                    <div class="collection-blk border p-4 d-flex mb-4">
                   <p class="collection_icon">
                       <i class="fa fa-check-square-o" aria-hidden="true"></i>
                   </p>
                  <div class="collection_meta">
                     <h6 class="main-clr fw-bold"> Getting Started </h6> 
                     <p class="collection_img py-1">
                        <img src="{{url('public/assets/images/profile-1.jpg')}}" alt="Image"/> 
                        <img src="{{url('public/assets/images/profile-2.jpg')}}" alt="Image"/>
                     </p>
                     <small> 22 articles in this collection <br> <strong> Written by </strong>  Idan,  Daniel,  Einat and 2 others</small>
                  </div>
               </div> 
              </div>
                <!-- 2 -->
                  <div>
                      <div class="collection-blk border p-4 d-flex mb-4">
                     <p class="collection_icon">
                         <i class="fa fa-check-square-o" aria-hidden="true"></i>
                      </p>
                      <div class="collection_meta">
                       <h6 class="main-clr fw-bold"> Pricing and Billing </h6> 
                       <p class="collection_img py-1">
                          <img src="{{url('public/assets/images/profile-1.jpg')}}" alt="Image"/> 
                          <img src="{{url('public/assets/images/profile-2.jpg')}}" alt="Image"/>
                       </p>
                       <small> 8 articles in this collection <br> <strong> Written by </strong> Daniel and Mor Menahemov</small>
                    </div>
                    </div>
                  </div>
                <!-- 3 -->
                <div>
                  <div class="collection-blk border p-4 d-flex mb-4">
                   <p class="collection_icon">
                       <i class="fa fa-check-square-o" aria-hidden="true"></i>
                   </p>
                  <div class="collection_meta">
                     <h6 class="main-clr fw-bold"> Useful Tips </h6> 
                     <p class="collection_img py-1">
                        <img src="{{url('public/assets/images/profile-1.jpg')}}" alt="Image"/> 
                        <img src="{{url('public/assets/images/profile-2.jpg')}}" alt="Image"/>
                     </p>
                     <small> 8 articles in this collection <br> <strong> Written by </strong> Daniel and Mor Menahemov</small>
                  </div>
               </div>
                </div>
              <!-- 4 -->
              <div>
                <div class="collection-blk border p-4 d-flex mb-4">
                   <p class="collection_icon">
                       <i class="fa fa-check-square-o" aria-hidden="true"></i>
                   </p>
                  <div class="collection_meta">
                     <h6 class="main-clr fw-bold"> Troubleshooting </h6> 
                     <p class="collection_img py-1">
                        <img src="{{url('public/assets/images/profile-1.jpg')}}" alt="Image"/> 
                        <img src="{{url('public/assets/images/profile-2.jpg')}}" alt="Image"/>
                     </p>
                     <small> 8 articles in this collection <br> <strong> Written by </strong> Daniel and Mor Menahemov</small>
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
