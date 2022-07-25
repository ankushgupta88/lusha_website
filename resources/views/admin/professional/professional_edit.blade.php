@extends('admin.layouts.master') 
@section('content')
    <!-- Main content -->
    <section class="content p-2 p-md-4">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                <div class="top-title pb-2 pb-md-4">
                    <h4> Edit Professionals  </h4>
                </div>
            </div>
          </div>
          <!--2-->
          <div class="row mb-4">
            <div class="col-lg-12  col-md-12 col-12">
            <div class="message-alert">
                @if (session('success'))
                  <p class="alert alert-success text-center">{{ session('success') }}</p>
              @endif
               @if (session('unsuccess'))
                  <p class="alert alert-danger text-center">{{ session('unsuccess') }}</p>
              @endif
              </div>
            <div class="card">
              <div class="card-header header-bg">
                <h3 class="card-title">Edit Professionals Information</h3>
              </div>
             <form method="post" action="{{ route('update.professional',$professional->id) }}" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')

              <div class="card-body">
                  <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" name="name" value="{{ $professional->name }}" id="inputName" class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputName">Designation</label>
                    <input type="text" name="designation" value="{{ $professional->designation }}" id="inputName" class="form-control @error('designation') is-invalid @enderror">
                    @error('designation')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                   <div class="form-group">
                    <label for="inputName">Image File</label>
                    <div class="blog-profile-image" style="width:225px"> <img src="{{asset('public/upload/professional/'.$professional->image_file)}}" alt="Image"/ class="img-fluid"> 
                    </div>
                    <input type="file" name="image_file" id="image" class="form-control @error('image_file') is-invalid @enderror">
                    @error('image_file')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
          

                <div class="form-group">
                  <label for="page_description">Description</label>
                  <textarea id="page_description" name="description" class="form-control @error('description') is-invalid @enderror">{{ $professional->description }}
                </textarea>
                @error('description')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
              <div class="form-group">
                <label for="Status">Status</label>
                <select id="Status" name="status" class="form-control custom-select">
                  <option value="">Select Status</option>
                  <option value="1" @if($professional['status'] == 1) selected @endif >Success</option>
                  <option value="0" @if($professional['status'] == 0) selected @endif>Pending</option>
                </select>
                 @error('status')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
                  <div class="row">
                    <div class="col-12">
                      <input type="submit" value="Update" class="btn btn-main">
                    </div>
                  </div>

                    </div>
                  </div>
                </div>
              </div>
    
          </div>
    </section>
@endsection