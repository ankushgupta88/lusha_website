@include('layouts.head')
<body>
 <div id="app">
     <?php
     if(Request::is('dashboard') || Request::is('prospecting') || Request::is('contact-lists') || Request::is('team') || Request::is('integrations') || Request::is('api') || Request::is('account') || Request::is('labs')){
     $class = "dashboard_header";
     }else{
          $class = "";
     }
     
     ?>
    <!--header section-->
     <header class="{{$class}}">
         <div class="header header2 bg-clr">
             <div class="container">
                 <div class="row align-items-lg-center py-2">
                     <div class="col-lg-2 col-6">
                         <div class="logo-block mb-3 mb-md-0">
                              <!--<a class="navbar-brand" href="{{ url('/') }}"> {{ config('app.name', 'LUSHA') }} </a>-->
                       <h3 id="thing_to_click" style="cursor: pointer;">Site.</h3>
                         </div>
                     </div>
                     <div class="col-lg-10 col-12">
                      <div class="nav-content">
                         <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                  <ul class="navbar-nav w-100">
                                    <li class="nav-item">
                                      <a class="nav-link" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="{{url('/plans')}}">Pricing</a>
                                    </li>
                                     <li class="nav-item">
                                      <a class="nav-link" href="{{url('/enterprise')}}">Enterprise</a>
                                    </li>
                                    <!--<li class="nav-item">
                                      <a class="nav-link" href="{{url('/customers')}}">Customers</a>
                                    </li>-->
                                    <li class="nav-item dropdown">
                                      <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Why Lusha? 
                                      </a>
                                      <!--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
                                      <!--  <li><a class="dropdown-item"-->
                                      <!--  href="{{url('/extension')}}">Lusha Extension <br> <span class="sub">Find contact data on the web</span></a></li>-->
                                      <!--   <li><a class="dropdown-item" href="{{url('/dashboard')}}">Prospecting Platform  <br> <span class="sub">Build accurate prospect listsb</span></a></li>-->
                                      <!--    <li><a class="dropdown-item" -->
                                      <!--    href="{{url('/site-api')}}">API  <br> <span class="sub">Enrich systems with data</span></a></li>-->
                                      <!--     <li><a class="dropdown-item" href="{{url('/site-integrations')}}">Integrations  <br> <span class="sub">Connect to systems you use</span></a></li>-->
                                      <!--</ul>-->
                                      
                                      
                                      
                                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item"
                                        href="{{url('/site-api')}}">API</a></li>
                                         <li><a class="dropdown-item" href="{{url('/marketing')}}">Marketing</a></li>
                                          <li><a class="dropdown-item" 
                                          href="{{url('/our-sales')}}">Our Sales</a></li>
                                           <li><a class="dropdown-item" href="{{url('/recruiters')}}">Recruiters</a></li>
                                           <li><a class="dropdown-item" href="{{url('/extension')}}">Extension</a></li>
                                           <li><a class="dropdown-item" href="{{url('/site-integrations')}}">Integrations</a></li>
                                           <li><a class="dropdown-item" href="{{url('/prospecting-platform')}}">Prospecting Platform</a></li>
                                      </ul>
                                    </li>
                                       <li class="nav-item dropdown">
                                      <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Company 
                                      </a>
                                      <!--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
                                      <!--  <li><a class="dropdown-item" href="{{url('/about')}}">About  <br> <span class="sub">This is us</span></a></li>-->
                                      <!--   <li><a class="dropdown-item" href="{{url('/our-data')}}">Our data  <br> <span class="sub">Know your data</span></a></li>-->
                                      <!--    <li><a class="dropdown-item" href="{{url('/careers')}}">Careers   <br> <span class="sub">Work with us </span></a></li>-->
                                      <!--     <li><a class="dropdown-item" href="{{url('/blogs')}}">Blog  <br> <span class="sub">Stay up-to-date</span></a></li>-->
                                      <!--</ul>-->
                                      
                                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{url('/about')}}">About</a></li>
                                         <li><a class="dropdown-item" href="{{url('/our-data')}}">Our Data</a></li>
                                          <li><a class="dropdown-item" href="{{url('/careers')}}">Career</a></li>
                                      </ul>
                                    </li>
                                    @if(!empty(Auth::user()))
                              <li class="nav-item dropdown">
                                      <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{Auth::user()->name }}
                                      </a>
                                
                                      
                                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            @if(Auth::user()->user_type == 'Customer' || Auth::user()->user_type == 'Development'|| Auth::user()->user_type == 'Sales')
                                        <li><a class="dropdown-item" href="{{url('/labs')}}">{{ __('Labs') }}</a></li>
                                         <li><a class="dropdown-item" href="{{url('/account')}}">{{ __('Account') }}</a></li>
                                          <li><a class="dropdown-item" href="{{url('/join-community')}}">{{ __('Join Community') }}</a></li>
                                          <li><a class="dropdown-item" href="{{url('/support')}}">{{ __('Support') }}</a></li>
                                     @endif
                                     <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                      </ul>
                                    @else
                                    
                                          <li class="nav-item login_lst">
                                      <a class="nav-link" href="{{url('/login')}}">Login</a>
                                    </li>
                                    <li class="nav-item signup signup_lst">
                                      <a class="nav-link" href="{{url('/register')}}">Signup</a>
                                    </li>
                                    @endif
                                  </ul>
                                </div>
                            </nav> 
                      </div>
                     </div>
                    
                 </div>
             </div>
         </div>
     </header>



        <main>
            @yield('content')
        </main>
    </div>
 <!--footer content-->
   <footer class="footer_main footer2">
       <div class="container">
           <div class="row">
              <div class="col-md-3 col-6">
                  <div class="footer-content">
                      <!--<h5 class="footer_headline fw-bold pb-3">Products</h5>
                      <ul class="p-0 list-unstyled">
                          <li> <a href="{{url('/extension')}}"> Lusha Extension </a></li>
                          <li> <a href="{{url('/prospecting-platform')}}"> Prospecting Platform </a></li>
                          <li> <a href="{{url('/site-api')}}"> Lusha API </a></li>
                          <li> <a href="{{url('/site-integrations')}}"> Integrations </a></li>
                      </ul>-->
                      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{url('public/assets/images/logo-white.png')}}" alt="Image"/ class="img-fluid"></a>
                      <p class="description">Our latest news, articles, and resources, we will sent to your inbox weekly.</p>
                      <form class="d-flex">
                         <input class="form-control me-2" type="search" placeholder="Email" aria-label="Search">
                         <button class="btn btn-outline-success" type="submit">Subscribe</button>
                      </form>
                  </div>
              </div> 
              <div class="col-md-3 col-6">
                  <div class="footer-content">
                      <!--<h5 class="footer_headline  fw-bold pb-3">Company</h5>
                      <ul class="p-0 list-unstyled">
                          <li> <a href="{{url('/about')}}"> About </a></li>
                          <li> <a href="{{url('/plans')}}"> Pricing </a></li>
                          <li> <a href="{{url('/customers')}}"> Customers </a></li>
                          <li> <a href="{{url('/our-data')}}"> Our Data </a></li>  
                          <li> <a href="{{url('/careers')}}"> Careers </a></li>
                      </ul>-->
                      
                      
                      <h5 class="footer_headline pb-3">Important Links</h5>
                      <ul class="p-0 list-unstyled">
                          <li> <a href="{{url('/privacy-policy')}}"> Privacy Policy </a></li>
                          <li> <a href="{{url('/enterprise')}}"> Enterprise </a></li>
                          <li> <a href="{{url('/term-services')}}">Terms of Service </a></li>
                          <li> <a href="{{url('/terms-of-use')}}"> Terms of Use </a></li>  
                      </ul>
                  </div>
              </div> 
              <div class="col-md-3 col-6">
                  <div class="footer-content">
                      <!--<h5 class="footer_headline pb-3">Information</h5>
                      <ul class="p-0 list-unstyled m-0">
                          <li> <a href="{{url('/data-sources')}}"> Data Sources </a></li>
                          <li> <a href="{{url('/community-program')}}"> Community Program </a></li>
                          <li> <a href="{{url('/terms-of-use')}}"> Community Terms of Use </a></li>
                          <li> <a href="{{url('/faq')}}"> Community FAQ </a></li>
                      </ul>-->
                      
                      
                      <h5 class="footer_headline pb-3">Information</h5>
                      <ul class="p-0 list-unstyled m-0">
                          <li> <a href="{{url('/faq')}}"> Community FAQ </a></li>
                          <li> <a href="{{url('/data-sources')}}"> Data Sources </a></li>
                          <li> <a href="{{url('/community-program')}}"> Our Community </a></li>
                          <li> <a href="{{url('/site-integrations')}}"> Integrations </a></li>
                      </ul>
                  </div>
              </div> 
               <div class="col-md-3 col-6">
                  <div class="footer-content">
                      <!--<h5 class="footer_headline pb-3">Resources</h5>-->
                      <!--<ul class="p-0 list-unstyled m-0">-->
                      <!--    <li> <a href="{{url('/blogs')}}"> Blog </a></li>-->
                      <!--    <li> <a href="{{url('/term-services')}}"> Terms of Service </a></li>-->
                      <!--    <li> <a href="{{url('/privacy-policy')}}"> Privacy Policy </a></li>-->
                      <!--    <li> <a href="{{url('/help-support')}}"> Help Center Support </a></li>  -->
                      <!--    <li> <a href="{{url('/api-documents')}}"> API Documentation </a></li>-->
                      <!--    <li> <a href="{{url('/privacy-center')}}"> Privacy Center </a></li>-->
                      <!--</ul>-->
                      
                      
                      
                      <h5 class="footer_headline pb-3">Company</h5>
                      <ul class="p-0 list-unstyled m-0">
                          <li> <a href="{{url('/about')}}"> About </a></li>
                          <li> <a href="{{url('/contact')}}"> Contact </a></li>
                          <li> <a href="{{url('/plans')}}"> Pricing </a></li>
                          <li> <a href="{{url('/extension')}}"> Chrome Extension </a></li>  
                      </ul>
                  </div>
              </div>
           </div>
       </div>
   </footer>
   
   <section class="copyright-footer2 py-md-2 py-3">
       <div class="container">
         <div class="row align-items-center">
             <!--<div class="col-md-4 col-12">-->
             <!--    <p class="copyright-txt text-white mb-0 text-center text-md-start"> © Copyright 2021 Lusha Ltd. All rights reserved.</p>-->
             <!--</div>-->
             <!--<div class="col-md-4 text-center col-12">-->
             <!--    <p class="address-txt text-white mb-0 py-3 py-md-0"> <i class="fa fa-map-marker pe-1" aria-hidden="true"></i>1177 6th Ave, New York, NY 10036, United States</p>-->
             <!--</div>-->
             <!--<div class="col-md-4 col-12">-->
             <!--    <ul class="social-icon p-0 list-unstyled d-flex mb-0 float-md-end justify-content-center">-->
             <!--       <li> <i class="fa fa-facebook" aria-hidden="true"></i> </li>-->
             <!--       <li> <i class="fa fa-twitter" aria-hidden="true"></i> </li>-->
             <!--       <li> <i class="fa fa-google-plus" aria-hidden="true"></i></li>-->
             <!--       <li> <i class="fa fa-linkedin" aria-hidden="true"></i> </li>-->
             <!--   </ul>-->
             <!--</div>-->
             
             <div class="col-12">
                 <div class="copyright_inner">
                     <div class="copyright_text">
                        <p>@2021 Yoursiteview</p>
                     </div>
                     <div class="footer_social_icons">
                        <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li> <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li> <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                     </div>
                 </div>
             </div>
         </div>
       </div>
   </section>

<!-- data table script -->
<script src="{{ asset('public/assets/js/bootstrap/bootstrapv3.min.js') }}" defer></script>
<script src="{{ asset('public/assets/js/bootstrap/jquery.dataTables.min.js') }}" defer></script>
<script src="{{ asset('public/assets/js/footer-custom-script.js') }}" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$("#thing_to_click").on('click', function(){
     window.location = "{{ url('/') }}";    
});
</script>
<script>
$("document").ready(function(){
    setTimeout(function(){
        $(".alert-danger").remove();
        $(".alert-success").remove();
    }, 5000 );
});

</script>
</body>
</html>
