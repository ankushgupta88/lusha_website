    
<div class="content-side-bar">
  <ul class="list-unstyled p-0 list-cstm mb-5"> 
  <li class="{{ Request::is('dashboard') ? 'active' : '' }}"> <a href="{{url('/dashboard')}}"> Dashboard </a> </li>
  <li class="{{ Request::is('prospecting') ? 'active' : '' }}"> <a href="{{url('/prospecting')}}"> Prospecting </a> </li>
  <li class="{{ Request::is('list') ? 'active' : '' }}"> <a href="{{url('/contact-lists')}}"> Lists </a> </li>
  <li class="{{ Request::is('team') ? 'active' : '' }}"> <a href="{{url('/team')}}"> Team </a> </li>
  <li class="{{ Request::is('integrations') ? 'active' : '' }}"> <a href="{{url('/integrations')}}"> Integrations </a> </li>
  <li> <a href="{{url('/api')}}"> API </a> </li>
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
