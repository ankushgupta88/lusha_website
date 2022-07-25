@extends('layouts.master')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<style>


.box {
  position: relative;
  background: #ffffff;
  width: 100%;

}

.box-header {
  color: #444;
  display: block;
  padding: 10px;
  position: relative;
  border-bottom: 1px solid #f4f4f4;
  margin-bottom: 10px;
}

.box-tools {
  position: absolute;
  right: 10px;
  top: 5px;
}

.dropzone-wrapper {
    border: 1px dashed #ffb116;
    color: #fff;
    position: relative;
    height: 125px;
    background-color: #0b163f;
}

.dropzone-desc {
  position: absolute;
  margin: 0 auto;
  left: 0;
  right: 0;
  text-align: center;
  width: 100%;
  top: 18px;
  font-size: 16px;
}

.dropzone,
.dropzone:focus {
  position: absolute;
  outline: none !important;
  width: 100%;
  height: 150px;
  cursor: pointer;
  opacity: 0;
}

input[type='file'] {
    width: 100%;
}
.box-header {

     border-bottom: 1px solid #fff;
  
}


.preview-zone {
  text-align: center;
}

.preview-zone .box {
  box-shadow: none;
  border-radius: 0;
  margin-bottom: 0;
}

</style>
<section class="apply_form">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="form_caption">
               <div class="form_caption_main">
                   <h2>Apply For Position</h2>
               </div>
               <!--<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore odio sint harum quasi maiores nobis</p>-->
               <p>{{$career_job['career_title']}}, {{$career_job['career_location']}}</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-7">
             {!! $career_job['description']!!}
             
            <!--<div class="requitement">-->
            <!--   <h2>Requirements</h2>-->
            <!--   <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.</p>-->
            <!--   <ul>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur</li>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Proin placerat sem id nisl maximus</li>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Nam luctus nunc vitae condimentum gravida</li>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Nam at est eget sem convallis scelerisque</li>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Etiam faucibus ex sed sodales cursus</li>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Ut pellentesque elit vitae erat rhoncus mollis</li>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Aliquam eu est vel enim sagittis pharetra</li>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Ut posuere elit eu ipsum pulvinar pretium</li>-->
            <!--   </ul>-->
            <!--</div>-->
            <!--<div class="requitement">-->
            <!--   <h2>Benefits</h2>-->
            <!--   <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.</p>-->
            <!--   <ul>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur</li>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Proin placerat sem id nisl maximus</li>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Nam luctus nunc vitae condimentum gravida</li>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Nam at est eget sem convallis scelerisque</li>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Etiam faucibus ex sed sodales cursus</li>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Ut pellentesque elit vitae erat rhoncus mollis</li>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Aliquam eu est vel enim sagittis pharetra</li>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Ut posuere elit eu ipsum pulvinar pretium</li>-->
            <!--   </ul>-->
            <!--</div>-->
            <!--<div class="requitement">-->
            <!--   <h2>How you should be</h2>-->
            <!--   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac auctor purus, id eleifend ipsum.</p>-->
            <!--   <p>Integer porttitor, ex ac volutpat commodo, mauris sem viverra tellus, dictum dapibus massa ex et metus. Vestibulum et nisl sit amet lectus interdum pretium sed at urna. Aenean pharetra dui a turpis malesuada, quis accumsan risus aliquam. Quisque venenatis, purus sit amet venenatis imperdiet. Eros nibh tristique ligula, imperdiet fringilla tellus libero vel dui. Vivamus iaculis diam sem, ac ultrices nulla laoreet nec. Suspendisse vel felis tortor. </p>-->
            <!--   <p>Etiam ac libero a enim dictum efficitur vel at tortor. </p>-->
            <!--   <ul>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur</li>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Proin placerat sem id nisl maximus</li>-->
            <!--      <li><i class="fa fa-circle" aria-hidden="true"></i>Nam luctus nunc vitae condimentum gravida</li>-->
            <!--   </ul>-->
            <!--</div>-->
         </div>
         <div class="col-md-5">
            <div class="message-alert">
                @if (session('success'))
                  <h5> Thank you </h5>
                  <p class="alert alert-success text-center">{{ session('success') }}</p>
                @endif
                @if (session('unsuccess'))
                  <p class="alert alert-danger text-center">{{ session('unsuccess') }}</p>
                @endif
            </div>
            <div class="form_right">
               <form action="{{ route('career.job') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="apply_position" value="{{$career_job['career_title']}}" class="form-control" id="firstInputname">
                        <input type="hidden" name="position_id" value="{{$career_job['id']}}" class="form-control" id="firstInputname">
                  <div class="mb-3">
                     <label for="exampleInputtext" class="form-label">First Name*</label>
                     <input type="text" class="form-control" name="name" id="exampleInputtext" aria-describedby="textHelp" placeholder="E.g. John">
                  @error('name')
                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputtext" class="form-label">Last Name*</label>
                     <input type="text" class="form-control" name="last_name" id="exampleInputtext" aria-describedby="textHelp" placeholder="E.g. Doe">
                  @error('last_name')
                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputtext" class="form-label">Phone*</label>
                     <input type="text" class="form-control" name="phone" id="exampleInputtext" aria-describedby="textHelp" placeholder="E.g. +1 300 400 5000">
                 @error('phone')
                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Email Address*</label>
                     <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E.g. John">
                 @error('email')
                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputtext" class="form-label">LinkedIn Profile URL</label>
                     <input type="text" class="form-control" name="linkedin_url" id="exampleInputtext" aria-describedby="textHelp" placeholder="Link">
                   @error('linkedin_url')
                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputtext" class="form-label">Website</label>
                     <input type="url" class="form-control" name="web_url" id="exampleInputtext" aria-describedby="textHelp" placeholder="E.g. http://www.example.com">
                   @error('web_url')
                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                  </div>
                  <div class="form mb-3">
                     <label for="floatingTextarea">Description</label>
                     <textarea class="form-control" name="message" placeholder="E.g. Additional Details" id="floatingTextarea"></textarea>
                   @error('message')
                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputtext" class="form-label">Attach Resume*</label>
                        
                              
                                <div class="col-md-12" >
                                  <div class="form-group">
                                    <div class="dropzone-wrapper">
                                      <div class="dropzone-desc">
                                          <div class="forminator-multi-upload-message" aria-hidden="true"><span class="forminator-icon-upload" aria-hidden="true"></span></div>
                                        <i class="glyphicon glyphicon-download-alt"></i>
                                        <p >Drag and Drop (or) <span><u>Files Choose</u></span></p>
                                      </div>
                                      <input type="file" name="resume" class="dropzone">
                                    </div>
                                    <div class="preview-zone hidden">
                                      <div class="box box-solid">
                                        <div class="box-header with-border">
                                          <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-danger btn-xs remove-preview">
                                              <i class="fa fa-close"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <div class="box-body"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
  
                  @error('resume')
                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputtext" class="form-label">Attach Cover Letter*</label>

                                <div class="col-md-12">
                                  <div class="form-group">
                                    <div class="dropzone-wrapper">
                                      <div class="dropzone-desc">
                                          <div class="forminator-multi-upload-message" aria-hidden="true"><span class="forminator-icon-upload" aria-hidden="true"></span></div>
                                        <i class="glyphicon glyphicon-download-alt"></i>
                                        <p>Drag and Drop (or) <span><u>Files Choose</u></span></p>
                                      </div>
                                      <input type="file" name="coverletter" class="dropzone">
                                    </div>
                                    <div class="preview-zone hidden">
                                      <div class="box box-solid">
                                        <div class="box-header with-border">
                                          <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-danger btn-xs remove-preview1">
                                              <i class="fa fa-close"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <div class="box-body"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                          @error('coverletter')
                           <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                  </div>
                   <div class="mb-3">
                     <label for="exampleInputtext" class="form-label">Attach Portfolio *</label>
                        <div class="col-md-12">
                          <div class="form-group">
                            <div class="dropzone-wrapper">
                              <div class="dropzone-desc">
                                  <div class="forminator-multi-upload-message" aria-hidden="true"><span class="forminator-icon-upload" aria-hidden="true"></span></div>
                                <i class="glyphicon glyphicon-download-alt"></i>
                                <p>Drag and Drop (or) <span><u>Files Choose</u></span> </p>
                              </div>
                              <input type="file" name="img_logo2" class="dropzone">
                            </div>
                            <div class="preview-zone hidden">
                              <div class="box box-solid">
                                <div class="box-header with-border">
                                  <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-danger btn-xs remove-preview2">
                                      <i class="fa fa-close"></i>
                                    </button>
                                  </div>
                                </div>
                                <div class="box-body"></div>
                              </div>
                            </div>
                          </div>
                        </div>

                </div>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>




<section class="our_team">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="our_team_inner">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <h2>Why Our Team</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac auctor purus, id eleifend ipsum.</p>
                    <p>Integer porttitor, ex ac volutpat commodo, mauris sem viverra tellus, dictum dapibus massa ex et metus. Vestibulum et nisl sit amet lectus interdum pretium sed at urna. Aenean pharetra dui a turpis malesuada, quis accumsan risus aliquam. Quisque venenatis, purus sit amet venenatis imperdiet. Eros nibh tristique ligula, imperdiet fringilla tellus libero vel dui. Vivamus iaculis diam sem, ac ultrices nulla laoreet nec. Suspendisse vel felis tortor. </p>
                    <p>Etiam ac libero a enim dictum efficitur vel at tortor. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
//     $('#button').click(function(){
//   $("input[type='file']").trigger('click');
// })

// $("input[type='file']").change(function(){
//   $('#val').text(this.value.replace(/C:\\fakepath\\/i, ''))
// })   
</script>

<!--Here Use Drag and Drop Script -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <script>
 $(document).ready(function() {
 
   $(".remove-preview").hide();
   $(".remove-preview1").hide();
   $(".remove-preview2").hide();
});

    function readFile(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      var htmlPreview =
        '<img width="50" src="' + e.target.result + '" />' +
        '<p>' + input.files[0].name + '</p>';
      var wrapperZone = $(input).parent();
      var previewZone = $(input).parent().parent().find('.preview-zone');
      var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');

      wrapperZone.removeClass('dragover');
      previewZone.removeClass('hidden');
      boxZone.empty();
      boxZone.append(htmlPreview);
      if($("input[name=resume]").val() !='' ){
          $(".remove-preview").show();
      }else{
           $(".remove-preview").hide();
      }
      
       if($("input[name=coverletter]").val() !='' ){
          $(".remove-preview1").show();
      }else{
           $(".remove-preview1").hide();
      }
      
       if($("input[name=img_logo2]").val() !='' ){
          $(".remove-preview2").show();
      }else{
           $(".remove-preview2").hide();
      }
       
       
    };

    reader.readAsDataURL(input.files[0]);
  }
}

function reset(e) {
  e.wrap('<form>').closest('form').get(0).reset();
  e.unwrap();
}

$(".dropzone").change(function() {
  readFile(this);
});

$('.dropzone-wrapper').on('dragover', function(e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).addClass('dragover');
});

$('.dropzone-wrapper').on('dragleave', function(e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).removeClass('dragover');
});

$('.remove-preview').on('click', function() {
  var boxZone = $(this).parents('.preview-zone').find('.box-body');
  var previewZone = $(this).parents('.preview-zone');
  var dropzone = $(this).parents('.form-group').find('.dropzone');
  boxZone.empty();
  previewZone.addClass('hidden');
  reset(dropzone);
   $(".remove-preview").hide();
});

$('.remove-preview1').on('click', function() {
  var boxZone = $(this).parents('.preview-zone').find('.box-body');
  var previewZone = $(this).parents('.preview-zone');
  var dropzone = $(this).parents('.form-group').find('.dropzone');
  boxZone.empty();
  previewZone.addClass('hidden');
  reset(dropzone);
   $(".remove-preview1").hide();
});

$('.remove-preview2').on('click', function() {
  var boxZone = $(this).parents('.preview-zone').find('.box-body');
  var previewZone = $(this).parents('.preview-zone');
  var dropzone = $(this).parents('.form-group').find('.dropzone');
  boxZone.empty();
  previewZone.addClass('hidden');
  reset(dropzone);
   $(".remove-preview2").hide();
});


 </script>

@endsection