@extends('admin.layouts.master')
 @section('content')

<!-- Main content -->
    <section class="content p-2 p-md-4">
      <div class="container-fluid">
        <div class="row mb-2 align-items-center">
          <div class="col-sm-6 col-4">
            <h4>All Professionals</h4>
          </div>
          <div class="col-sm-6 col-8">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active"> Professionals List </li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card table-responsive">
              <div class="card-header header-bg">
                <h3 class="card-title">All Professionals list</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                @if (session('success'))
                  <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                @if (session('unsuccess'))
                    <p class="alert alert-danger">{{ session('unsuccess') }}</p>
                @endif
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Description</th>
                    <th>Image File</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php $i = 1; @endphp
                    @foreach($professional as $key => $value)
                       
                      <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $value['name'] }}</td>
                        <td>{{ $value['designation'] }}</td>
                        <td>{!! $value['description'] !!}</td>
                        
                        <td>
                        	<div class="blog-profile-image"> <img src="{{asset('public/upload/professional/'.$value['image_file'])}}" alt="Image"/ class="img-fluid"> 
                        	</div>
                        </td>
                        <?php
                        	$updated_at = $value['updated_at'];
                        	$date = date('F d,Y',strtotime($updated_at));
                         ?>
                                <td class="project-state">
                              @if($value['status'] == 1)
                              <span class="badge badge-success">Success</span>
                              @else
                              <span class="badge badge-warning">Pending</span>
                              @endif
                          </td>
                        <td>{{ $date }}</td>

                        <td class="edit-delete-btn">
                          <a class="btn btn-info btn-sm" href="{{ route('edit.professional',$value['id']) }}"><i class="fas fa-pencil-alt"></i> Edit</a> 

                          <a class="btn btn-danger btn-sm ml-2" href="{{ url('admin/professional/professional-delete',$value['id']) }}"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                      </tr>
                       @php $i++; @endphp
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

  </div>
  <!-- /.content-wrapper -->
 @endsection
