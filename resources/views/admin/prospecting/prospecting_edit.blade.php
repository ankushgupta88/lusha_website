@extends('admin.layouts.master')
 @section('content')

   <!-- Main content -->
    <section class="content p-2 p-md-4">
         <div class="row mb-2 align-items-center">
          <div class="col-sm-6 col-4">
            <h4>Edit Prospecting</h4>
          </div>
          <div class="col-sm-6 col-8">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Prospecting  </li>
            </ol>
          </div>
        </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
          <div class="card card-primary">
            <div class="card-body">
                 @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
         @if (session('unsuccess'))
            <p class="alert alert-danger">{{ session('unsuccess') }}</p>
        @endif
             <form method="post" action="{{ route('update.prospecting',$prospecting['id']) }}" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')
              <div class="form-group">
                <label for="PlanName"> Name</label>
                <input type="text" id="name" name="full_name" value="{{ $prospecting['full_name'] }}" class="form-control">
              </div>
              
             
               <div class="form-group">
                <label for="inputuser">Job Title</label>
                <input type="text" name="job_title" id="job_title" value="{{ $prospecting['job_title'] }}" class="form-control">
              </div>
              
                <div class="form-group">
                <label for="inputuser">Job Company Name</label>
                <input type="text" name="job_company_name" id="job_company_name" value="{{ $prospecting['job_company_name'] }}" class="form-control">
              </div>
         
             <div class="form-group">
                <label for="inputuser">Departments</label>
                <input type="text" name="new_departments" id="new_departments" value="{{ $prospecting['new_departments'] }}" class="form-control">
              </div>
              
               <div class="form-group">
                <label for="inputuser">Contact Number</label>
                <input type="text" name="mobile_phone" id="mobile_phone" value="{{ $prospecting['mobile_phone'] }}" class="form-control">
              </div>
              
              
               <div class="form-group">
                <label for="Status">Status</label>
                <select id="Status" name="status" class="form-control custom-select">
                  <option value="">Select one</option>
                  <!--<option value="php">PHP</option>-->
                  <option value="1" @if($prospecting['status'] == 1) selected @endif >Succes</option>
                  <option value="0" @if($prospecting['status'] == 0) selected @endif>Pending</option>
                  <!--<option>Success</option>-->
                </select>
              </div>
              <div class="row">
                <div class="col-12">
                  <!--<a href="#" type="reset" class="btn btn-secondary">Reset</a>-->
                  <!--<input type="reset" class="btn btn-secondary" value="Reset">-->
                  <input type="submit" value="Update" class="btn btn-main">
                </div>
              </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
         
      </div>
    </section>
 
  </div>
  <!-- /.content-wrapper -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $(".allow_decimal").on("input", function(evt) {
           var self = $(this);
           self.val(self.val().replace(/[^0-9\.]/g, ''));
           if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which > 57)) 
           {
             evt.preventDefault();
           }
        });
    });
  </script>
  
 @endsection