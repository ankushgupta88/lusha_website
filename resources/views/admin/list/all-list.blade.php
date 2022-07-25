@extends('admin.layouts.master')
 @section('content')

   <!-- Main content -->
    <section class="content p-2 p-md-4">
      <div class="container-fluid">
         <div class="row mb-2 align-items-center">
          <div class="col-sm-6 col-4">
            <h4>All List</h4>
          </div>
           <div class="col-sm-6 col-8">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">List</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header header-bg">
                <h3 class="card-title">All list</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if (session('success'))
                  <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                @if (session('unsuccess'))
                    <p class="alert alert-danger">{{ session('unsuccess') }}</p>
                @endif
                <div class="table-responsive">
                <table id="example7" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>List Name</th>
                    <th>Contacts</th>
                    <th>Created By</th>
                    <th>Created Date</th>
                    <th>Last Updated</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php($count = 0)
                    @foreach($all_list as $lists)
                        @php($count++)
                      <tr>
                        <td>{{ $count }}</td>
                        <td>{{ $lists->list_name }}</td>
                        <td>{{ $lists->list_contacts }}</td>
                        <td>{{ $lists->list_createdby }}</td>
                        <?php
                          $expire_plane = $lists->created_at;
                          $created_at = date('F d,Y',strtotime($expire_plane." +1 month"));
                        ?>
                        <td>{{ $created_at}}</td>
                        <?php
                          $expire_plane = $lists->updated_at;
                          $updated_at = date('F d,Y',strtotime($expire_plane." +1 month"));
                        ?>
                        <td>{{ $updated_at}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
                </div>
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
