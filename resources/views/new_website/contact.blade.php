@extends('layouts.master')
@section('content')
<section class="contact_us_main">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="contact_caption">
               <h2>Contact us</h2>
               <p>Make contact with our qualified staff</p>
            </div>
         </div>
      </div>
      <div class="row contact_row">
         <div class="col-4">
            <div class="contact_inner">
               <div class="contact_icons">
                  <i class="fa fa-comments-o" aria-hidden="true"></i>
               </div>
               <h2>Chat with us</h2>
               <p>Discuss your business ’ needs with our staff.</p>
               <button type="button">Let's chat</button>
            </div>
         </div>
         <div class="col-4">
            <div class="contact_inner">
               <div class="contact_icons">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>
               </div>
               <h2>Email Us</h2>
               <p>Send us an email and you receive responses</p>
               <button type="button">Email Us</button>
            </div>
         </div>
         <div class="col-4">
            <div class="contact_inner">
               <div class="contact_icons">
                  <i class="fa fa-mobile" aria-hidden="true"></i>
               </div>
               <h2>Call with us</h2>
               <p>Call us if you require further information</p>
               <button type="button">+12313256789</button>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="contact_form_main">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="contact_caption">
               <h2>Let's Talk With Our Team.</h2>
               <p>In the year 2022, every business has to expand in their field, and we give the means for these enterprises to do so without needing your additional effort.</p>
            </div>
         </div>
      </div>
      <div class="row iframe_main">
         <div class="col-md-6">
            <div class="contact_form_map">
               <div class="contact_caption contact_captions">
                  <h2>Reach</h2>
                  <p>Reach at our physical location</p>
               </div>
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13719.388935099598!2d76.69900595!3d30.722694799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1650867468792!5m2!1sen!2sin" width="600" height="370" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </div>
         <div class="col-md-6">
            <div class="form_right">
               <div class="message-alert">
                  @if (session('success'))
                  <h5> Thank you </h5>
                  <p class="alert alert-success text-center">{{ session('success') }}</p>
                  @endif
                  @if (session('unsuccess'))
                  <p class="alert alert-danger text-center">{{ session('unsuccess') }}</p>
                  @endif
               </div>
               <form action="{{url('/contact-us')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="contact_flex">
                     <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Name *</label>
                        <input type="text" class="form-control" name="name" id="exampleInputtext" aria-describedby="textHelp" placeholder="E.g. John">
                        @error('name')
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
                  </div>
                  <div class="form mb-3">
                     <label for="floatingTextarea">Message*</label>
                     <textarea class="form-control" name="message" placeholder="E.g. Explain your message" id="floatingTextarea"></textarea>
                     @error('message')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                     @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection