@extends('admin.layouts.master')
 @section('content')

<!-- Main content -->
    <section class="content p-2 p-md-4">
      <div class="container-fluid">
        <div class="row mb-2 align-items-center">
          <div class="col-sm-6 col-4">
            <h4>All Orders</h4>
          </div>
          <div class="col-sm-6 col-8">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active"> Order List </li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card table-responsive">
              <div class="card-header header-bg">
                <h3 class="card-title">All order list</h3>
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
                    <th>Plan</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php($count = 0)
                    @foreach($all_order as $all_orders)
                        @php($count++)
                      <tr>
                        <td>{{ $count }}</td>
                        <td>{{ $all_orders->order_user_list->name }}</td>
                        <td>{{ @$all_orders->order_user_plan_list->plan_name }}</td>
                        <td>{{ $all_orders->billing_email }}</td>
                        <td>{{ $all_orders->billing_country }}</td>
                        <td>{{ $all_orders->amount }}</td>
                        <?php
                        	$updated_at = $all_orders->updated_at;
                        	$date = date('F d,Y',strtotime($updated_at));
                         ?>
                        <td>{{ $date }}</td>

                        <td class="edit-delete-btn">
                          <a class="btn btn-info btn-sm" href="{{ route('invoice.receipt',$all_orders->id) }}"></i> View receipt </a> 
                        </td>
                        
                      </tr>
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
