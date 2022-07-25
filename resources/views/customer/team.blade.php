@extends('layouts.after-login-master')

@section('content')

<section class="app"> 
 <div class="container-fluid">
     <div class="row">
        <div class="col-md-2 side-content pb-5">
            @include('layouts.sidebar')
        </div>
          <div class="col-md-10">
            <div class="content-main">
              <div class="app-content p-md-5 pt-5">
                <div class="col-md-12">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <div class="content-title">
                       @if (session('status'))
                            <p class="alert alert-success text-center">{{ session('status') }}</p>
                        @endif
                      </div>
                   <div class="content-title">
                       <h5 class="app-page-title mb-0"> Team </h5>
                   </div>

                </div>
                  <div class="col-md-6 d-flex align-items-center justify-content-end">
                    <div class="create-list">
                         <button type="button" class="btn app-btn-primary" data-bs-toggle="modal" data-bs-target="#creategroupModal">
                              Create group
                            </button>
                             <!-- Modal -->
                            <div class="modal fade" id="creategroupModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                      <i class="fa fa-cogs pe-3" aria-hidden="true"></i>
                                    <h5 class="modal-title fw-bold" id="createModalLabel">Increase your efficiency with groups</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <p class="mb-0"> Upgrade your plan to create groups and efficiently manage credit consumption. </p>
                                  </div>
                                 <div>
@foreach($team as $teams)
<form action="{{ url('contact-sale') }}" method="POST">
 @csrf
  <div class="modal-body">
  <h3>Hi {{$teams->name}}, let’s talk</h3>
  <div class="mb-0">
  <label for="exampleFormControlInput1" class="form-label">Enter your phone number and we will contact you.</label>
  <input type="hidden" class="form-control" name="user_id" value="{{$teams->id}}">
  <input type="hidden" class="form-control" name="user_name" value="{{$teams->name}}">
  <input type="text" class="form-control" name="phone_number" value="{{$teams->phone}}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Anything else?</label>
    <textarea class="form-control" name="message" placeholder="Tell us..." rows="3"></textarea>
  </div>
  </div>                                                             
<div class="modal-footer">
  <button type="submit" class="btn app-btn-primary">Contact Sales</button>
</div>
</form>
@endforeach
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            
                        <!-- Button trigger modal -->
                            <button type="button" class="btn app-btn-primary" data-bs-toggle="modal" data-bs-target="#inviteModal">
                              Invite members
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="inviteModal" tabindex="-1" aria-labelledby="inviteModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <i class="fa fa-fire pe-3" aria-hidden="true"></i>
                                    <h5 class="modal-title fw-bold" id="createModalLabel">You’ve reached your account seat limit</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <p class="mb-0"> It's great that you make full use of Lusha! <br>Upgrade your plan to invite more team members. </p>
                                  </div>
                                  <div class="modal-footer">
                                    <a href="{{url('/plans')}}" target="blank"><button type="button" class="btn app-btn-primary">Check upgrade options</button></a>
                                  </div>
                                </div>
                              </div>
                            </div>



                   </div> 
                </div><br>


                  <div class="table-content pt-5">
                      <table id="example" class="display pt-4 mb-4" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>List Name</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role </th>
                <th>Credits monthly usage</th>
                <th> Credits annual usage </th>
                <th> Group </th>
                <th> </th>
            </tr>
        </thead>
 
 
        <tbody>
            <tr>
              @foreach($team as $teams)
              @foreach($team_plan as $used_plan)
                <th>All Contacts</th>
                <td>{{$teams->name}}</td>
                <td>{{$teams->email}}</td>
                <td>{{$teams->user_type}}</td>
                <td>{{$used_plan->used_credits}}</td>
                <td>{{$used_plan->used_credits}}</td>
                <td>-</td>
                <td> <button class="btn app-btn-primary float-end" class="btn app-btn-primary" data-bs-toggle="modal" data-bs-target="#creategroupModal"> Add to group </button> </td>
              @endforeach
              @endforeach
            </tr>
        </tbody>
    </table>
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
