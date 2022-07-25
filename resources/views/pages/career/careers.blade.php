@extends('layouts.master2')
@section('content')


<!--banner section-->
    <section class="banner_section_main career_banner">
        <div class="container-fluid">
         <div class="row align-items-center">
             <div class="col-md-12">
                 <div class="banner_text  text-center text-md-start">
                     <h1 class="hero__title fw-bold">Start Your <span style="color: #FFB116;"> Career</span></h1>
                     <p class="hero__subtitle">Join our team and live your life in a great environment.</p>
                 </div>
             </div>
         </div>
        </div>
    </section>
    
<!--benefits section-->
    <section class="benefits-section career_benifits block-space block-space-bottom">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="main_title main_title2 text-center">
                     <h1 class="main-title-text fw-bold"> Apply and Join Today</h1>
                 </div>
             </div>
         </div>
         @if(!empty($career))
         <div class="row pt-2">
                @foreach($career as $key => $value)
                    <div class="col-lg-6">
                        <div class="benefits_content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                            <img src="{{asset('/public/upload/career/'.$value->image)}}" style="width: 60px">
                            <!--<i class="fa fa-building-o" aria-hidden="true"></i>-->
                            <h5 class="fw-bold mb-0 py-2 mt-3"> {{$value->career_title}} </h5>
                            <p class="mb-0 px-4"> Subtitle will me here </p>
                            <a href="{{url('/careers-job',$value->id)}}" style="text-decoration:auto;"><button type="button" class="apply">Apply</button></a>
                        </div>
                    </div>
               @endforeach
         </div>
          @endif
     </div>
    </section>
    
 
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
   <script>
       $(document).ready(function() {

        $('.counter').each(function () {
        $(this).prop('Counter',0).animate({
        Counter: $(this).text()
        }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
        $(this).text(Math.ceil(now));
        }
        });
        });
        
        });
   </script>
 
@endsection  
