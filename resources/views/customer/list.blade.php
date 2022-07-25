@extends('layouts.after-login-master')

@section('content')

<section class="app"> 
 <div class="container-fluid">
     <div class="row">
        <div class="col-md-2 side-content">
            @include('layouts.sidebar')
        </div>
          <div class="col-md-10">
            <div class="content-main">
              <div class="app-content p-md-5 pt-5">
                <div class="col-md-12">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                   <div class="content-title">
                       <h5 class="app-page-title mb-0"> Lists </h5>
                   </div>
                </div>
                  <div class="col-md-6 d-flex align-items-center justify-content-end">
                   <div class="select-content-list">
                        <select class="form-select w-auto me-3 form-control status-dropdown" aria-label="Default select example">
                          <option selected="">All Lists</option>
                          <option value="1">Active Lists </option>
                          <option value="2">Archived Lists</option>
                        </select>
                   </div>
                    <div class="create-list">
                        <!-- Button trigger modal -->
                            <button type="button" class="btn app-btn-primary" data-bs-toggle="modal" data-bs-target="#createlistModal">
                              Create List
                            </button>
                            
                            <!-- Modal -->

                        <form action="{{ url('add-list') }}" method="POST">
                           @csrf
                           @auth
                            <div class="modal fade" id="createlistModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="createModalLabel">Create a new list</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                              <div class="mb-3">
                                <label for="listname" class="form-label">List name</label>
                                <input type="text" class="form-control" name="list_name" id="list_name">
                                <input type="hidden" class="form-control" name="user_id" value="{{Auth::id()}}" id="created_by">
                                <input type="hidden" class="form-control" name="contacts" value="" id="contacts">
                                <input type="hidden" class="form-control" name="created_by" value="{{ Auth::user()->name }}" id="created_by">
                              </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>

                                    <button type="submit" class="btn btn-primary">Create List</button>
                                  
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endauth
                        </form>



                   </div> 
                </div><br>
<div id="success_message"></div>
  <div class="table-content pt-5 pb-5 pb-md-0 table-responsive">
      <table id="example" class="display pt-4 mb-4" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th> </th>
                <th>List Name</th>
                <th>Contacts</th>
                <th>Created By</th>
                <th>Created Date </th>
                <!--<th>December 22nd, 2021</th>-->
                <th> </th>
            </tr>
        </thead>

 
        <tbody>
           
          <tr>
                <td> </td>
                <td><a href="{{url('/prospecting-list')}}">All Contacts</a></td>
                <td>{{ $list_count }}</td>
                <td></td>
                <td>December 22nd, 2021</td>
                <!--<td>December 22nd, 2021</td>-->
                <td>  </td>
            
          </tr>
          
          @foreach($list_data as $lists)
            <tr>
                <td> </td>
                <td><a href="{{url('/prospecting-list',$lists->id)}}">{{$lists->list_name}}</a></td>
                <td>{{$lists->list_contacts}}</td>
                <td>{{$lists->list_createdby}}</td>
                <?php
                  $expire_plane = $lists->created_at;
                  $created_at = date('F m,Y',strtotime($expire_plane." +1 month"));
                ?>
                <td>{{$created_at}}</td>
                <?php
                  $expire_plane = $lists->updated_at;
                  $updated_at = date('F m,Y',strtotime($expire_plane." +1 month"));
                ?>
                <!--<td>{{$updated_at}}</td>-->
                <td>                          
                    <div class="create-list">
                        <!-- Button trigger modal -->
                        <button type="button" value="{{$lists->id}}" class="btn btn-primary editbtn btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
  <i class="fa fa-edit"></i>
</button>
                            <!--<button type="button" value="{{$lists->id}}" class="btn btn-primary editbtn btn-sm"><i class="fa fa-edit"></i></button>-->
                            <button type="button" class="btn app-btn-primary"><a href="{{url('/list-delete',$lists->id)}}"><i class="fa fa-trash-o" style="color:#fff;"></i></a></button>
                   </div> 
                    
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit & Update List</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          
            <div class="modal-body">

                <ul id="update_msgList"></ul>

                <input type="hidden" id="list_id" />

                <div class="form-group mb-3">
                    <label for="">List Name</label>
                    <input type="text" name="name" id="name" required class="form-control">
                    <input type="hidden" name="user_id" id="user_id" required class="form-control">
                    <input type="hidden" name="created_by" id="created_by" required class="form-control">
                    <input type="hidden" name="contacts" id="contacts" required class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary update_student">Update</button>
            </div>

        </div>
    </div>
</div>
<!-- Edit Modal -->

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
