@extends('layouts.master')
@section('content')
<!--banner section-->
<!--<section class="banner_section_main career_banner pricing_banner blog_banner">-->
<!--   <div class="container-fluid">-->
<!--      <div class="row align-items-center">-->
<!--         <div class="col-md-12">-->
<!--            <div class="banner_text  text-center text-md-start">-->
               <!--<button type="button" type="design">Design</button>-->
<!--               <h1 class="hero__title fw-bold">Login</h1>-->
<!--               <ul>-->
<!--                  <li><a href="{{url('/')}}">Home</a><span class="separator"></span></li>-->
<!--                  <li><a href="#">Login</a><span class="separator"></span></li>-->
                  <!--<p>Do you really understand the concept of product?</p>-->
<!--               </ul>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</section>-->
<!--blog content section-->   
<section class="blog_content_area">
   <div class="container">
      <div class="row">
          <div class="col-md-3">
              </div>
         <div class="col-md-6">
            <div class="blog_form login-form shadow">
               <h2 class="text-center fw-bold">Login</h2>
               @if (session('unsuccess'))
            <h6 class="alert alert-success">{{ session('unsuccess') }}</h6>
            @endif
               <form method="POST" action="{{ route('login.submit') }}">
                    @csrf
                  <div class="row">
                     <div class="col-md-12">
                        <div class="blog_fields">
                             <label>Email Address</label>
                                <!--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>-->
                           <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email"  name="email" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Email*" autofocus>
                        </div>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                     </div>
                     <div class="col-md-12">
                        <div class="blog_fields">
                            <label>Password</label>
                           <!--<input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="Password*">-->
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="remember_forget">
                            <div class="remember">
                                <!--<input id="wp-comment-cookies-consent" type="checkbox" id="scales" name="scales">-->
                                <input class="form-check-input" type="checkbox" name="remember" id="remember wp-comment-cookies-consent" {{ old('remember') ? 'checked' : '' }}>
                               <label for="wp-comment-cookies-consent">Remember Me</label>
                            </div>
                        
                            <div class="forget_password">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                              </div>
                        </div>
                        <div class="post_comment login_btn d-flex justify-content-center">
                            <button type="submit">Login</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-md-3">
            <!--@include('layouts.blog_sidebar')-->
         </div>
      </div>
   </div>
</section>
@endsection