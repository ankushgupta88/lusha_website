@extends('layouts.master')

@section('content')

<section class="app"> 
 <div class="container">
  <div class="row">
    <div class="col-md-12">
       <div class="table-content py-5 table-responsive">
      <table id="prospecting_example" class="display pt-4 mb-4" cellspacing="0" width="100%">
        <thead>
            <tr>
                <td></th>
                <th>Full Name</th>
                <th>Data</th>
                <th>Job Title</th>
                <th>Company</th>
                <th>Departments</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>

 
        <tbody>
          @foreach($prospect_list as $lists)
            <tr>
                <td></td>
                <td>{{$lists->full_name}}</td>
                    
                <td>
                    <?php if($lists->linkedin_url) {?>
                    <a target="_blank" href="<?php echo 'https://www.'.$lists->linkedin_url; ?>"><i class="fa fa-linkedin-square fa-2x fa-solid" aria-hidden="true"></i></a> 
                <?php } 
                if($lists->facebook_url){
                ?>
                
                <a target="_blank" href="<?php echo 'https://www.'.$lists->facebook_url; ?>"><i class="fa fa-facebook-square fa-2x fa-solid" aria-hidden="true"></i></a>
                <?php }
                
                if($lists->twitter_url) { ?>
                <a target="_blank" href="<?php echo 'https://www.'.$lists->twitter_url; ?>"><i class="fa fa-twitter-square fa-2x fa-solid" aria-hidden="true"></i></a>
                <?php }
                
                if($lists->github_url) {?>
                <a target="_blank" href="<?php echo 'https://www.'.$lists->github_url; ?>"><i class="fa fa-github-square fa-2x fa-solid" aria-hidden="true"></i></a>
                <?php } 
                
                if($lists->work_email) { ?>
                <a target="_blank" href="mailto:{{$lists->work_email}}"><i class="fa fa-envelope-square fa-2x fa-solid" aria-hidden="true"></i></a>
                <?php } ?>
                
              <?php  if($lists->mobile_phone) { ?>
                <a target="_blank" href="tel:{{$lists->mobile_phone}}"><i class="fa fa-phone-square fa-2x fa-solid" aria-hidden="true"></i></a>
            <?php }    ?>
                </td>
                <td>{{$lists->job_title}}</td>
                <td>{{$lists->job_company_name}}</td>
                <td>{{$lists->new_departments}}</td>
                
                <?php
                  $expire_plane = $lists->created_at;
                  $created_at = date('F m,Y',strtotime($expire_plane." +1 month"));
                ?>
                
                <td>{{$created_at}}</td>
                <td></td>
            </tr>
            
           @endforeach
        </tbody>
    </table>
</div>
    </div>
  </div>

 </div>
 

</section>

@endsection
