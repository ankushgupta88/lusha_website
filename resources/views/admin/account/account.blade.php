@extends('admin.layouts.master')

@section('content')

<section class="app"> 
 <div class="container-fluid">
     <div class="row">
          <div class="col-md-9">
            <div class="content-main">
              <div class="app-content p-md-5 pt-5">
                  <div class="row align-items-center">
                    <div class="col-md-12">
                       <div class="content-title pb-5">
                           <h5 class="app-page-title mb-0"> Account Detail </h5>
                       </div>
                    </div>
             @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
                    <div class="col-md-12">
                        <div class="tab-content-blk">

                      <!-- 1 -->
                      @foreach($myaccount as $profile)
                        <div id="profile" class="account p-4 my-4 border tabcontent">
                          <h6 class="fw-600 mb-0"> Personal Details </h6>
                          <form action="{{ url('admin/admin-account-update/'.$profile->id) }}" method="POST" class="pt-4 mb-0">
                        @csrf
                        @method('PUT')
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="emailaddress" value="{{$profile->email}}" readonly>
                              </div>
                              <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{$profile->name}}">
                              </div>
                              <div class="mb-3">
                                <label for="name" class="form-label">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="name" value="{{$profile->last_name}}">
                              </div>
                              
                            <input type="submit" value="Save Changes" class="btn btn-main">  <a href="{{url('admin/change-password')}}"> ?Change Password</a>
                          </form>
                          
                         
                            
                        </div>
                      @endforeach
                    </div>               
              </div>
            </div>
        </div>
     </div>
 </div>
</section>
@endsection