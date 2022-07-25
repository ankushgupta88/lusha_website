@extends('layouts.after-login-master')

@section('content')

<section class="app"> 
 <div class="container-fluid">
     <div class="row">
        <div class="col-md-2 side-content">
            @include('layouts.sidebar')
        </div>
          <div class="col-md-9">
            <div class="content-main" id="dashboardhide">
               <div class="app-content p-md-5 pt-5">
		       <!--1st row-->
		        <div class="row pb-4 pb-md-5">
		            <div class="col-md-12">
		               <div class="content-title">
		                   <h5 class="app-page-title pb-4"> Your EmailFinder dashboard</h5>
		               </div>
		                <div class="message-alert">
			                @if (session('success'))
			                  <p class="alert alert-success text-center">{{ session('success') }}</p>
			              @endif
			               @if (session('unsuccess'))
			                  <p class="alert alert-danger text-center">{{ session('unsuccess') }}</p>
			              @endif
			             </div>
		            </div>
		   @foreach($user_plans as $user_plan)
		   		@foreach($plans as $planDetail)	           
		          <div class="col-md-4">
		              <div class="card heigth-100 mb-3 mb-md-4">
		                <div class="card-body emailFinder-dashboard shadow-inner d-flex p-4">  
		                  <div class="icon-blk"> <i style="background:#28a745;" class="fa fa-pagelines" aria-hidden="true"></i> </div>
    		               <div class="view-item-content ps-3">
    		                  <p class="mb-2"> Plan</p>
    		                  <h6 class="mb-0 fw-bold"> {{$planDetail->plan_name}} </h6>
    		               </div>
    		              </div>
		              </div>
		          </div>
		          <div class="col-md-4">
		              <div class="card heigth-100 mb-3 mb-md-4">
		                <div class="card-body emailFinder-dashboard shadow-inner d-flex p-4">  
		                  <div class="icon-blk"> <i style="background:#ffc107;" class="fa fa-user-o" aria-hidden="true"></i> </div>
    		               <div class="view-item-content ps-3">
    		                  <p class="mb-2"> Team members </p>
    		                  <h6 class="mb-0 fw-bold"> 1/1 </h6>
    		                  <a class="btn app-btn-primary mt-3" href="{{url('/plans')}}"> Upgrade plan  </a>
    		               </div>
    		              </div>
		              </div>
		          </div>
		          <div class="col-md-4">
	              <div class="card heigth-100 mb-3 mb-md-4">
	                <div class="card-body emailFinder-dashboard shadow-inner d-flex p-4">  
	                  <div class="icon-blk"> <i style="background:#17a2b8;" class="fa fa-credit-card" aria-hidden="true"></i> </div>
		               <div class="view-item-content ps-3">
		                  <p class="mb-2"> Next credits cycle </p>
		                  <?php
		                  	$expire_plane = $user_plan->created_at;
		                  	$final = date('F d,Y',strtotime($expire_plane." +1 month"));
		                  		$finaltime = date('H:i A',strtotime($expire_plane." +1 month"));
		                  ?>
		                  <h6 class="mb-0 fw-bold"> {{ $final }} </h6>
		                  <small> Renewal at {{$finaltime}} </small>
		               </div>
		              </div>
	              </div>
		          </div>

		      </div>
		  <!--2nd row-->
		    <div class="row pb-4 pb-md-5">
		        <div class="col-md-12">
		            <div class="content-title d-flex align-items-center justify-content-between pb-4">
		                   <h5 class="app-page-title mb-0"> Insights</h5>
		                   <!-- <select class="form-select w-auto ms-3 dropdown_selector" aria-label="Default select example">
                          <option value="1">Today</option>
                          <option value="2">Yesterday</option>
                          <option value="3">Last 7 days</option>
                          <option value="4">Last 30 days</option>
                          <option value="5">Last 90 days</option>
                          <option value="6">Last 180 days</option>
                        </select> -->
		               </div>
		        </div>
		          <div class="col-md-4">
		              <div class="card heigth-100 mb-3 mb-md-4">
		                <div class="card-body card-body-insights shadow-inner d-flex p-2">  
    		               <div class="view-item-content view-item-contents">
    		                  <h6 class="mb-0 fw-bold" style="color: #007bff;">{{$user_plan->used_credits}}</h6>
    		                  <p class="mb-0"> Credits used </p>
    		               </div>
    		               <div class="icon-blk"> <i class="fa fa-credit-card" aria-hidden="true"></i> </div>
    		              </div>
		              </div>
		          </div>
		          <div class="col-md-4">
		              <div class="card heigth-100 mb-3 mb-md-4">
		                <div class="card-body card-body-insights shadow-inner d-flex p-2">  
    		               <div class="view-item-content view-item-contents">
    		                  <h6 class="mb-0 fw-bold" style="color:#28a745;">{{$user_plan->used_credits}}</h6>
    		                  <p class="mb-0"> Saved contacts</p>
    		               </div>
    		               <div class="icon-blk"> <i class="fa fa-sticky-note-o" aria-hidden="true"></i> </div>
    		              </div>
		              </div>
		          </div>
		            <div class="col-md-4">
		              <div class="card heigth-100 mb-3 mb-md-4">
		                <div class="card-body card-body-insights shadow-inner d-flex p-2">  
    		               <div class="view-item-content view-item-contents">
    		                  <h6 class="mb-0 fw-bold" style="color:#dc3545;">{{$user_plan->used_credits}}</h6>
    		                  <p class="mb-0"> Collected details</p>
    		               </div>
    		               <div class="icon-blk"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </div>
    		              </div>
		              </div>
		          </div>
		            
		    </div>
		@endforeach
	@endforeach
		    <!--3rd row-->
		       <div class="row pb-4 pb-md-5">
		        <div class="col-md-12">
		            <div class="content-title d-flex align-items-center justify-content-between pb-4">
		                   <h5 class="app-page-title mb-0"> Improve your performance with data Insights</h5>
		               </div>
		        </div>
		          <div class="col-md-8">
		              <div class="card heigth-100">
		                <div class="card-body shadow-inner d-flex p-4">  
		                  <ul class="list-unstyled p-0 list-cstm m-0">
		                      <li> <i class="fa fa-check" aria-hidden="true"></i> Learn how to work better with EmailFinder. </li>
		                      <li> <i class="fa fa-check" aria-hidden="true"></i>Optimize your team's performance. </li>
		                      <li> <i class="fa fa-check" aria-hidden="true"></i> Find your ideal prospects. </li>
		                  </ul>
    		              </div>
		              </div>
		          </div>
		           <div class="col-md-4">
		              <div class="card heigth-100">
		                <div class="card-body shadow-inner d-flex p-4 performane-improve justify-content-center">  
		                  <i class="fa fa-line-chart main-clr" aria-hidden="true"></i>
    		              </div>
		              </div>
		          </div>
		      </div>
		      <!--4th row-->
		       <div class="row pb-4 pb-md-5">
		        <div class="col-md-12">
		         

		            <div class="content-title d-md-flex align-items-center justify-content-between p-4 shadow-inner">
		                <div class="exp-title">
		                   <h5 class="app-page-title mb-0"> Liking EmailFinder's new dashboard experience?</h5>
		                   <small> Your feedback will help us improve. </small>
		                   <br>  <a href="{{url('/plans')}}"><button class="btn app-btn-primary mt-3"> Upgrade to get insights  </button></a>
		                   </div>
		                   <div class="exp-btn">
		                       		            <!--<svg width="8"  height="8" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.53.47A.75.75 0 00.47 1.53L2.94 4 .47 6.47a.75.75 0 001.06 1.06L4 5.06l2.47 2.47a.75.75 0 001.06-1.06L5.06 4l2.47-2.47A.75.75 0 006.47.47L4 2.94 1.53.47z" fill="#8B8B8B"></path></svg>-->

		                <button class="btn border-btn-primary mt-3"> Not really  </button>
		               <button class="btn border-btn-primary mt-3"> yes  </button>
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
