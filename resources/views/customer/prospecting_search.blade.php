@extends('layouts.after-login-master')

@section('content')
<style>
#fname {
    border: 0px solid #eaeaea !important;
    width: 100%;
    margin-left: -7px;
    height: 20px;
}
.dropdown-menu.show { margin-top: -10px !important;}

#cover{
    display:none;
}
.select2.select2 {
    width: 100% !important;
}
ul#select2-answers1-results,ul#select2-answers2-results,ul#select2-answers3-results,ul#select2-answers4-results,ul#select2-answers5-results,ul#select2-answers6-results,ul#select2-answers7-results,ul#select2-answers8-results,ul#select2-answers9-results,ul#select2-answers10-results {
    position: absolute;
    top: 60px;
    background:#fff;
}
.include-btn {
    position: relative;
   
}
#people_list_paginate {
    display: none;
}
#people_list_info {
    display: none;
}

.buttonlink a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

.buttonlink a:hover {
  background-color: #ddd;
  color: black;
}

.buttonlink .previous {
  background-color: #f1f1f1;
  color: black;
}

.buttonlink {
    float: right;
    margin-top: 10px;
}
.buttonlink .next {
  background-color: #04AA6D;
  color: white;
}
.w-5.h-5 {
    height: 50px;
}
.relative.z-0.inline-flex.shadow-sm.rounded-md {
    display: none;
}
.flex.justify-between.flex-1.sm\:hidden {
    float: right;
    margin-top: 15px;
}
.contents{
  width:100px;
  height:300px;
  background:#f1f1f1;
  margin:30px auto;

  position:relative;
  text-align:center;
}

.dropdown-menu.show {width: 100%;}       
input[type="text"] {
    border: 1px solid #ececec;
    width: 100%;
    height: 40px;
    border-radius: 0px;    padding: 0 18px 0;     font-size: 14px;
    
}

#navbarDropdown{
    color: #111;
    font-size: 14px !important;
    font-weight: 600 !important;
    padding: 15px 0 15px 15px;
    border-bottom: 1px solid #ececec !important;
}
 .ex1 h3 {
    font-size: 18px;
    padding: 0 18px 0;
}
.include-btn p {
    padding: 10px 22px 0;
}
.include-btn {
    display: flex;
}
.dropdown-menu {
 box-shadow: 0 6px 12px rgb(255 255 255 / 18%) !important; 
}
.select2-container--default.select2-container--focus .select2-selection--multiple {
    border: solid #dad7d7 1px !important;
    
}

 



</style>
  <!-- Bootstrap CSS -->
    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    
<section class="app" > 
  <?php
  

    
    $people_count = 0;
    if($people_list->data){
        //  echo "<pre>";
        // print_r($people_list); die;
        foreach($people_list->data as $people){
          
           
            //Check company name is exit or not in array
            if($people->job_company_name){ 
                $people_count++;
            }
        }
    }
    
    // Count company result
        $company_count = 0;
        
    if($company_list->data){
        foreach($company_list->data as $count_company){
            //Check company name is exit or not in array
            if($count_company->job_company_name && $count_company->phone_numbers && $count_company->emails){ 
                $company_count++;
            }
        }
    }
    
    ?>
    
    <div class="container-fluid" id="filtersearch">
     <div class="row">
        <div class="col-md-2 side-content">
            @include('layouts.sidebar')
        </div>
          <div class="col-md-9 mx-auto" >
            <div class="content-main">
                <div class="row py-4 border-bottom ">
                    <div class="col-md-6 col-sm-6">
                       <div class="prospecting-header">
            <ul class=" nav nav-tabs" role="tablist">
                  <li class="active"><button role="presentation" href="#People" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-user" aria-hidden="true"></i> People (<?php echo $people_count; ?>)</button></li>
                  <li><button role="presentation" href="#Companies" aria-controls="messages" role="tab" data-toggle="tab"> <i class="fa fa-building-o" aria-hidden="true"></i> Companies (<?php echo $company_count; ?>)</button></li>
            </ul>
 
              </div> 
                    </div>
                     <div class="col-md-6 col-sm-6">
                          <div class="prospecting-header">
                  <ul class="list-unstyled p-0 list-cstm d-sm-flex m-0">
                      <li> See how Prospecting works </li>
                      <li>
                        <button class="btn pros-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Recent activity </button>
                        <button class="btn pros-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Saved Searches </button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                              <div class="offcanvas-header justify-content-end">
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                              </div>
                              <div class="offcanvas-body">
                                <h5 id="offcanvasRightLabel" class="fw-bold">Recent activities</h5> 
                                <p> Your prospecting activity over the past 30 days </p>
                                <div class="activity-content">
                                    <h6> Today </h6>
                                    <div class="data-activity-content border p-3 d-flex justify-content-between">
                                        <div>
                                            <h6> <i class="fa fa-clock-o" aria-hidden="true"></i> Today at 6:22 PM <br> <small> Unsaved search... </small></h6>
                                        </div>
                                        <div class="load-search">
                                          <button class="btn app-btn-primary"> Load Search </button>  
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                      </li>
                  </ul>
              </div>
              </div>
              <div class="show_company_list_search"></div>
            </div>
            <div class="row my-lg-5">
                <div class="col-lg-3 col-md-12">
                    <div class="wrapper prospecting-accordions bg-white rounded shadow-2 my-4 my-lg-0">
 
    <div class="accordion accordion-flush border-top border-start border-end" id="myAccordion">
        <div class="accordion-item border-0">
             <button class="accordion-button collapsed border-0 d-grid" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"><h5> Filters</h5></button>
            
        </div>  
       <div class="accordion-item border-0" >
<!--*********** Model Code *************-->
<a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a>

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Show a second modal and hide this one with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
      </div>
    </div>
  </div>
</div>



       <!--*********** End Model Code *************-->
    
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Company Name
             <input type="text" id="fname"placeholder="search" name="fname" autocomplete="off">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
           
          <select id="answers1" class="js-states form-control answ1" multiple="false">

           <?php  if($company_list){
                            
                         foreach($company_list->data as $row){
                                        $_id = (array)$row->_id;
                                        
                                        if($row->job_company_name){?>
                                        
                                    <option data-value="<?php if(isset($_id['$oid'])) echo $_id['$oid']; ?>" value="<?php echo $row->job_company_name;?>"><?php echo $row->job_company_name;?>
                                     <?php  }}
                                     }?>
                                     </option>
          </select>
            
            
        <div class="include-btn"><p class="">Include</p> <p class="">Exclude</p></div>
          
            </ul>
            </li>            
    </div>
       <div class="accordion-item border-0" >
       
           
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Company HQ location
            <input type="text" id="fname"placeholder="Enter company location" name="fname" autocomplete="off">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
           
          <select id="answers2" class="js-states form-control answ1" multiple="false" autocomplete="off">

            <?php  if($job_company_location_name){
                         foreach($job_company_location_name as $row){
                                        $_id = (array)$row->_id;
                                        if($row->job_company_location_name){ ?>
                                    <option data-value="<?php if(isset($_id['$oid'])) echo $_id['$oid']; ?>" value="<?php echo $row->job_company_location_name;?>"><?php echo $row->job_company_location_name;?></option>
                                     <?php   }
                                        }
                                     }?>
                                     
          </select>
            
            
       <div class="include-btn"><p class="">Include</p> <p class="">Exclude</p></div>
          
            </ul>
            </li>            
    </div> 
       <div class="accordion-item border-0" >
       
           
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Industry
            <input type="text" id="fname"placeholder="Enter Industry" name="fname" autocomplete="off">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
           
          <select id="answers3" class="js-states form-control answ1" multiple="false" autocomplete="off">

                  <?php   if($job_company_industry){
                     foreach($job_company_industry as $row){
                                    $_id = (array)$row->_id;
                                    if($row->job_company_industry){?>
                            <option data-value="<?php if(isset($_id['$oid'])) echo $_id['$oid']; ?>" value="<?php echo $row->job_company_industry;?>"><?php echo $row->job_company_industry;?></option>
                             <?php }
                                }
                             }?>
          </select>
            
            
        <div class="include-btn"><p class="">Include</p> <p class="">Exclude</p></div>
          
            </ul>
            </li>            
    </div> 
        
 
       <div class="accordion-item border-0" >
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Employee headcount
                        <input type="text" id="fname"placeholder="Enter Employee" name="fname" autocomplete="off">

          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <select id="answers4" class="js-states form-control answ1" multiple="false" autocomplete="off">
                    <?php   if($job_company_size){
                     foreach($job_company_size as $row){
                                    $_id = (array)$row->_id;
                                    if($row->job_company_size){ ?>
                            <option data-value="<?php if(isset($_id['$oid'])) echo $_id['$oid']; ?>" value="<?php echo $row->job_company_size;?>"><?php echo $row->job_company_size;?></option>
                             <?php }
                               }
                             }?>
          </select>
        <div class="include-btn"><p class="">Include</p> <p class="">Exclude</p></div>
            </ul>
            </li>            
    </div> 
    
       <div class="accordion-item border-0" >
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Year founded
             <input type="text" id="fname"placeholder="Enter Year" name="fname" autocomplete="off">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <select id="answers5" class="js-states form-control answ1" multiple="false" autocomplete="off">
                     <?php  if($job_company_founded){
                     foreach($job_company_founded as $row){
                                    $_id = (array)$row->_id;
                                    if($row->job_company_founded){?>
                            <option data-value="<?php if(isset($_id['$oid'])) echo $_id['$oid']; ?>" value="<?php echo $row->job_company_founded;?>"><?php echo $row->job_company_founded;?></option>
                             <?php  }
                                 }
                             }?>
          </select>
        <div class="include-btn"><p class="">Include</p> <p class="">Exclude</p></div>
            </ul>
            </li>            
    </div> 
                
        <div class="accordion-item border-0">
             <button class="accordion-button collapsed border-0 d-grid" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"><h5> PEOPLE</h5></button>
            
        </div>
        <div class="accordion-item border-0" >
            <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Contact name
           <input type="text" id="fname"placeholder="Enter Contact Name" name="fname" autocomplete="off">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <select id="answers6" class="js-states form-control answ1" multiple="false" autocomplete="off">
                     <?php  if($company_list){
                     foreach($company_list->data as $row){
                                    $_id = (array)$row->_id;
                                    //dd($row->job_company_founded); 
                                    if($row->job_title){?>
                            <option data-value="<?php if(isset($_id['$oid'])) echo $_id['$oid']; ?>" value="<?php echo $row->job_title;?>"><?php echo $row->job_title;?></option>
                             <?php  }
                                 }
                             }?>
          </select>
            <div class="include-btn"><p class="">Include</p> <p class="">Exclude</p></div>
            </ul>
            </li>            
      </div> 
    
    <div class="accordion-item border-0" >
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Contact location
           <input type="text" id="fname"placeholder="Enter Contact location" name="fname" autocomplete="off">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <select id="answers7" class="js-states form-control answ1" multiple="false" autocomplete="off">
                   <?php  if($job_company_location_country){
                     foreach($job_company_location_country as $row){
                                    $_id = (array)$row->_id;
                                    if($row->job_company_location_country){?>
                            <option data-value="<?php if(isset($_id['$oid'])) echo $_id['$oid']; ?>" value="<?php echo $row->job_company_location_country;?>"><?php echo $row->job_company_location_country;?></option>
                             <?php  }
                                 }
                             }?>
          </select>
           <div class="include-btn"><p class="">Include</p> <p class="">Exclude</p></div>
            </ul>
            </li>            
    </div> 
    
     <div class="accordion-item border-0" >
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Department
          <input type="text" id="fname"placeholder="Enter Department" name="fname" autocomplete="off">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <select id="answers8" class="js-states form-control answ1" multiple="false" autocomplete="off">
                   <?php  if($job_title_role){
                     foreach($job_title_role as $row){
                                    $_id = (array)$row->_id;
                                    if($row->job_title_role){?>
                            <option data-value="<?php if(isset($_id['$oid'])) echo $_id['$oid']; ?>" value="<?php echo $row->job_title_role;?>"><?php echo $row->job_title_role;?></option>
                             <?php  }
                                 }
                             }?>
          </select>
        <div class="include-btn"><p class="">Include</p> <p class="">Exclude</p></div>
            </ul>
            </li>            
    </div> 

<div class="accordion-item border-0" >
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Seniority
          <input type="text" id="fname"placeholder="Enter Seniority" name="fname" autocomplete="off">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <select id="answers9" class="js-states form-control answ1" multiple="false" autocomplete="off">
                   <?php  if($job_title_role){
                     foreach($job_title_role as $row){
                                    $_id = (array)$row->_id;
                                    if($row->job_title_role){?>
                            <option data-value="<?php if(isset($_id['$oid'])) echo $_id['$oid']; ?>" value="<?php echo $row->job_title_role;?>"><?php echo $row->job_title_role;?></option>
                             <?php  }
                                 }
                             }?>
          </select>
        <div class="include-btn"><p class="">Include</p> <p class="">Exclude</p></div>
            </ul>
            </li>            
    </div> 
    
    <div class="accordion-item border-0" >
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Job title
          <input type="text" id="fname"placeholder="Enter Job title" name="fname" autocomplete="off" autocomplete="off">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <select id="answers10" class="js-states form-control answ1" multiple="false" autocomplete="off">
                   <?php  if($job_title){
                     foreach($job_title as $row){
                                    $_id = (array)$row->_id;
                                    if($row->job_title){?>
                            <option data-value="<?php if(isset($_id['$oid'])) echo $_id['$oid']; ?>" value="<?php echo $row->job_title;?>"><?php echo $row->job_title;?></option>
                             <?php  }
                                 }
                             }?>
          </select>
        <div class="include-btn"><p class="">Include</p> <p class="">Exclude</p></div>
            </ul>
            </li>            
    </div> 
        

        
   
        
  
        
        
       
    </div>
</div>
                    </div>
<div class="col-lg-9 col-md-12">
     
         <div class="hide_old_table_example">
         <div class="app-title-header px-3 px-md-0 mb-3">
           <h5 class="app-page-title mb-0">Build your ideal prospect list</h5>
           <small>Use the filters to get meaningful results, then reveal contact details.</small>
           </div>

 <div class="tab-content">
     <div class="show_filter_company_list_msg" style="display:none;">
         <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
     <div class="show_filter_company_list"></div>
      <div role="tabpanel" class="tab-pane active" id="People">
        <?php if($people_list) { ?>
        <table id="people_list" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Employee</th>
                <th>Details</th>
                <th>Company</th>
                <!--<th>Action</th>-->
            </tr>
        </thead>
      
        <tbody>
            <?php foreach($people_list1 as $people){ ?>
                <?php //Check company name is exit or not in array
                if($people->job_company_name){ ?>
                    <tr>
                       <td>
                           <p><strong><?php if(isset($people->full_name)) echo $people->full_name; ?></p></strong>
                          <p><?php if(isset($people->job_title)) echo $people->job_title; ?></p>
                           <p>
                            <?php if($people->linkedin_url){ ?>
                            <a href="<?php echo 'https://www.'.$people->linkedin_url; ?>" target="_blank"><i class="fa fa-linkedin-square fa-2x fa-solid" aria-hidden="true"></i></a> 
                            <?php } 
                            if($people->facebook_url){ ?>
                          <a target="_blank"  href="<?php echo 'https://www.'.$people->facebook_url; ?>"><i class="fa fa-facebook-square fa-2x fa-solid" aria-hidden="true"></i></a>
                      <?php } 
                      if($people->twitter_url){ ?>
                           <a target="_blank" href="<?php echo 'https://www.'.$people->twitter_url; ?>"><i class="fa fa-twitter-square fa-2x fa-solid" aria-hidden="true"></i></a>
                       <?php }
                        if($people->github_url){?>
                            <a target="_blank" href="<?php echo 'https://www.'.$people->github_url; ?>"><i class="fa fa-github-square fa-2x fa-solid" aria-hidden="true"></i></a>
                     <?php   }
                        ?>
                       </td>
                       <td>  
                        <?php if($people->work_email){ ?>
                           <p>Email : <?php if(isset($people->work_email)) echo $people->work_email; ?></p>
                       <?php } 

                       if($people->mobile_phone){ ?>
                           <p>Phone :<?php if(isset($people->mobile_phone)) echo $people->mobile_phone; ?></p>
                       <?php }?>
                       </td>
                        <td>
                        <p><strong><?php if(isset($people->job_company_name)) echo $people->job_company_name; ?></strong></p>
                        <p><?php if(isset($people->job_company_location_name)) echo $people->job_company_location_name; ?></p>
                        <p><?php  if(isset($people->job_company_industry)) echo $people->job_company_industry; ?></p>
                        <p><?php if(isset($people->job_company_size)) echo $people->job_company_size; ?></p>
                        <p><?php if(isset($people->job_company_website)) echo $people->job_company_website; ?></p>
                      </td>
                    </tr>
                <?php } ?>
            <?php  } ?>
        </tbody>
   
        </table>
    <?php
         $page = !empty($_REQUEST['page'])?$_REQUEST['page']:1;
         $next = $page+1;
         $prev = ($page == 1)?1:$page-1;
    ?>
<div class="buttonlink">
     <a href="{{url('prospecting?page='.$prev)}}" class="previous">Previous</a>
<a href="{{url('prospecting?page='.$next)}}" class="next">Next</a>
 

</div>
  
  
 
    <?php }?>
    
      </div>

      <div role="tabpanel" class="tab-pane" id="Companies">
          <div id="showresults"></div>
        <!-- Company List here -->
        <?php if($company_list) { ?>
        <table id="company_list2" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Company</th>
                <th>details</th>
                <th>Action</th>
            </tr>
        </thead>
      
        <tbody>
            <?php foreach($company_list->data as $company){ ?>
                <?php //Check company name is exit or not in array
                if($company->job_company_name && $company->phone_numbers && $company->emails ){ 
                ?>
                    <tr>
                       <td>
                        <p><strong><?php if(isset($company->job_company_name)) echo $company->job_company_name; ?></strong></p>
                        <p><?php if(isset($company->job_company_location_name)) echo $company->job_company_location_name; ?></p>
                        <p><?php  if(isset($company->job_company_industry)) echo $company->job_company_industry; ?></p>
                        <p><?php if(isset($company->job_company_size)) echo $company->job_company_size; ?></p>
                        <p><?php if(isset($company->job_company_website)) echo $company->job_company_website; ?></p>
                      </td>
                      <td>
                          <p><?php if(isset($company->phone_numbers[0])) echo "Phone: ".$company->phone_numbers[0] ; ?></p>
                          <p><?php if(isset($company->emails[0]->address)) echo "Email: ".$company->emails[0]->address; ?></p>
                      </td>
                       <td> 
                       
                       <?php // echo "<pre>"; print_r($company); echo "</pre>"; ?>
                            <button class="btn app-btn-primary float-end show_company_detail" data-company_id="<?php 
                                    $id = (array) $company->_id;
                                    echo $id['$oid'] ?: ''; 
                            ?>">Show Details</button>
                        </td>
                    </tr>
                <?php } ?>
            <?php  } ?>
        </tbody>
   
        </table>
    <?php }?>

      </div>

    </div>
 
       <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     <script>
          
        $(document).ready(function() {
            var table = $('#company_list2').DataTable();
            var table = $('#people_list').DataTable();//End of create main table
        });

        </script>
        
            @if(Session::has('status'))
            <div class="alert alert-success">
            {{ Session::get('status') }}
            </div>
            @endif
        </div>
        <div class="filter_loader" style="display: none"></div>
         <div class="filter_save pt-3">
           <label for="coupon_field" id="check_count"></label>
             <button  id="clear" class="btn btn-primary-outline py-1">Clear</button>  
             <button  id="hidden" class="btn app-btn-primary ms-2">Show Detail</button>
        </div><br>

        <div class="prespeting_responce mb-4 mb-lg-0"></div>
      <?php $list_name = ''; ?>
      @foreach($user_list as $list)
        <?php
           $list_name = $list->list_name;
         ?>
      @endforeach
    @foreach($plans as $credit)
      <?php 
       $current_credit = $credit->credits;
       $used_credit = $credit->used_credits;
      ?>      
      
          <!-- model filter data -->
          
        <div class="modal fade" id="show_company_model" tabindex="-1" aria-labelledby="show_company_model" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                  <i class="fa fa-cogs pe-3" aria-hidden="true"></i>
                <h5 class="modal-title fw-bold" id="show_company_model">Save Contacts</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{ url('add-prospecting') }}" method="POST" class="Contact_list">
                 @csrf
                 @auth
                 <div class="mb-3">
                  <select class="form-select w-auto me-3 form-control status-dropdown" aria-label="Default select example">
                    <option selected="">Lusha</option>
                  </select><br>
                  <select class="form-select w-auto me-3 form-control status-dropdown"
                  name="list_id" aria-label="Default select example">
                  @foreach($user_list as $list)
                    <option value="{{$list->id}}">{{$list->list_name}}</option>
                  @endforeach
                  </select>
                  @foreach($user_list as $list)
                  <?php $contacts = $list->list_contacts+1; ?>
                    <input type="hidden" name="list_contact" value="{{$contacts}}">
                  @endforeach
                  @foreach($plans as $current_credit)
                    <?php $credit = $current_credit->used_credits+1; ?>
                    <input type="hidden" name="credit" value="<?= $credit ?>">
                  @endforeach
                  <div class="show_company_results"></div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>

                  <button type="submit" class="btn btn-primary">Save Detail</button>
                
                </div>               
                @endauth                  
                </form>
              </div>
        </div>
        </div>
        </div> 
   </div>  
        </div>




<!-- end save detail model -->
     
    @endforeach
 
</section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
                $(document).ready(function() {
                    var table = $('#people_list').DataTable();
                     var table1 = $('#company_list2').DataTable();
                    
                });
                
                $(function(){
   $('body').on('click', '.show_company_detail', function () {
    
        var company_id = $(this).attr("data-company_id");
         jQuery.noConflict(); 
        $("#show_company_model").modal('show');
        
         $.ajax({
            type: "GET",
            url: base_url+'/get-company-details/',
            data: {
                company_id: company_id,
            },
            success: function (response){
                $('.show_company_results').html(response);
            }
    
    });
}); 


});
            </script>
    <script>

   $('#answers1').change(function(){
       $('#answers1 :selected').text();
       
   var options = document.getElementById('answers1').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }
         
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                filter_name: filter_name,
                history: filter_name,
                filter_type:"job_company_name"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
     });
     
      $("#answers1").select2({
          placeholder: "Select a programming language",
          allowClear: true,
          
      });
         </script>
    <script>
       $('#answers2').change(function(){
    
   var options = document.getElementById('answers2').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                comp_location: filter_name,
                 history: filter_name,
                filter_type:"job_company_location_name"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $("#answers2").select2({
          placeholder: "Company HQ location",
          allowClear: true,
        
      });
      
    </script>
    <script>
       $('#answers3').change(function(){
    
   var options = document.getElementById('answers3').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                industry: filter_name,
                 history: filter_name,
                filter_type:"job_company_industry"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $("#answers3").select2({
          placeholder: "Enter Industry",
          allowClear: true,
        
      });
      
    </script>
    <script>
       $('#answers4').change(function(){
    
   var options = document.getElementById('answers4').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                employeeheadcount: filter_name,
                 history: filter_name,
                filter_type:"job_company_size"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $("#answers4").select2({
          placeholder: "Enter Employee headcount",
          allowClear: true,
        
      });
      
    </script>
    <script>
       $('#answers5').change(function(){
    
   var options = document.getElementById('answers5').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                job_company_founded: filter_name,
                 history: filter_name,
                filter_type:"job_company_founded"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $("#answers5").select2({
          placeholder: "Enter Year founded",
          allowClear: true,
        
      });
      
    </script>
    <script>
       $('#answers6').change(function(){
    
   var options = document.getElementById('answers6').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                contact_name: filter_name,
                 history: filter_name,
                filter_type:"contact_name"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $("#answers6").select2({
          placeholder: "Enter Year founded",
          allowClear: true,
        
      });
      
    </script>
    <script>
       $('#answers7').change(function(){
    
   var options = document.getElementById('answers7').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                contact_location: filter_name,
                 history: filter_name,
                filter_type:"job_company_location_country"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $("#answers7").select2({
          placeholder: "Enter Year founded",
          allowClear: true,
        
      });
      
    </script>
     <script>
       $('#answers8').change(function(){
    
   var options = document.getElementById('answers8').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                department: filter_name,
                 history: filter_name,
                filter_type:"job_title_role"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $("#answers8").select2({
          placeholder: "Enter Department",
          allowClear: true,
        
      });
      
    </script>
    <script>
       $('#answers9').change(function(){
    
   var options = document.getElementById('answers9').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                job_title: filter_name,
                 history: filter_name,
                filter_type:"job_title_role"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $("#answers9").select2({
          placeholder: "Enter answers10",
          allowClear: true,
        
      });
       
    </script>
    <script>
       $('#answers10').change(function(){
    
   var options = document.getElementById('answers10').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                job_title: filter_name,
                history: filter_name,
                filter_type:"job_title"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $("#answers10").select2({
          placeholder: "Enter Job title",
          allowClear: true,
        
      });
       
    </script>
      <script>
    //  $('#savehistory').click(function(){

    //   var all = $(".select2-selection__choice").text();
    //   var filter_name = Array.from(options).map(({ all }) => all);
    //       alert(filter_name);
    //   });   
     </script>
@endsection  
  

