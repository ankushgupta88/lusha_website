    
<div class="content-side-bar">
  <ul class="list-unstyled p-0 list-cstm mb-5"> 
  <li class="{{ Request::is('dashboard') ? 'active' : '' }}"> <a href="{{url('/dashboard')}}"> <i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard </a> </li>
  <li class="{{ Request::is('prospecting') ? 'active' : '' }}"> <a href="{{url('/prospecting')}}"> <i class="fa fa-yelp" aria-hidden="true"></i>Prospecting </a> </li>
  <li class="{{ Request::is('contact-lists') ? 'active' : '' }}"> <a href="{{url('/contact-lists')}}"><i class="fa fa-list-ul" aria-hidden="true"></i> Lists </a> </li>
  <li class="{{ Request::is('team') ? 'active' : '' }}"> <a href="{{url('/team')}}"><i class="fa fa-users" aria-hidden="true"></i> Team </a> </li>
  <li class="{{ Request::is('integrations') ? 'active' : '' }}"> <a href="{{url('/integrations')}}"><i class="fa fa-superpowers" aria-hidden="true"></i> Integrations </a> </li>
  <li class="{{ Request::is('api') ? 'active' : '' }}"> <a href="{{url('/api')}}"><i class="fa fa-bolt" aria-hidden="true"></i> API </a> </li>
  </ul>

  @php
  $catData = \App\Helper\Helpers::get_user_plan()
  @endphp

@foreach($catData as $key => $data)
   <div class="sidebar-links-cont py-2"> 
         <div class="pd-cls">
            <div class="credit-progress-sec d-flex justify-content-between">
               <p class="mb-0">Credits</p><p class="mb-0">{{ $data->used_credits }} out of {{ $data->credits }}</p>
            </div>
            <?php
                $width = $data->used_credits*100/$data->credits;
             ?>
            <div class="progress" style="height:20px">
              <div class="progress-bar" style="width:<?= $width;?>%;height:20px"></div>
            </div>
          </div>
       <div class="pd-cls"> <a href="{{url('/get-free-credits')}}">Get Free Credits</a> </div>
       <div class="pd-cls"> <a href="{{url('/plans')}}"><i class="fa fa-star" aria-hidden="true"></i>
 Upgrade</a> </div>
@endforeach
 </div>
</div>
