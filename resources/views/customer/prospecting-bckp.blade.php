@extends('layouts.after-login-master')

@section('content')
<style>
#fname {
    border: 0px solid #eaeaea !important;
    width: 100%;
    margin-left: -7px;
    height: 20px;
}
.modal-backdrop.fade.show {
    z-index: 1;
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
/*#company_list3_paginate {*/
/*    display: none;*/
/*}*/
/*#company_list3_paginate {*/
/*    display: none;*/
/*}*/
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

.modal-body label {
    font-size: 14px;
    font-weight: 600;
}
.modal-body input#savename {
    width: 100%;
    border: 1px solid #d9d8d8 !important;
    height: 35px;
    border-radius: 10px;
    padding: 0 18px 0;
    margin-bottom: 22px;
}

.modal-body .select-opt {
    width: 100%;
    border: 1px solid #d9d8d8;
    height: 35px;
    border-radius: 10px;
    padding: 0 18px 0;
}
.modal-body input#save-box {
    margin: 5px 18px 0px 0px;
}
.modal-content {
    border-radius: 20px;
    padding: 10px 10px 10px 10px;
}
h5#exampleModalToggleLabel {
    font-size: 18px;
}

.modal-content p {
    font-size: 13px;
    line-height: 20px;
    margin-top: 5px;
}
button.btn-close {
    position: relative;
    top: -34px;
}
button.search-btn {
    border: none;
    padding: 6px 12px 6px;
    border-radius: 6px;
    background-color: #0655ff;
    color: #fff;
    font-size: 14px;
}
button.accordion-button.collapsed.border-0.d-grid {
    justify-content: center;
    padding: 10px 0 15px;
}
.clear-btn {
    padding: 5px 14px 5px;
    font-size: 14px;
    color: #000;
    border-radius: 10px;
    border: 1px solid #d3cfcf;
}

.save-btn {
    padding: 5px 14px 5px;
    font-size: 14px;
    color: #000;
    border-radius: 10px;
    background: #f2f2f2;
}

.load-search button.btn {
    border: 1px solid #eee;
    padding-bottom: 0px !important;
    padding: 1px 11px 0;
    font-size: 14px;
    font-weight: 600;
}
.load-search button.btn.load-search-btn,.prospecting-header button.btn.load-search-btn{
    text-align: center;
    cursor: pointer;
    border-radius: 4px;
    color: rgb(21, 20, 23);
    background-color: rgb(255, 255, 255);
    height: 28px;
    padding: 0px 12px;
    font-size: 12px;
    font-weight:600;
    line-height: 15px;
    outline: 0px;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    transition: color 50ms ease-in-out 0s, background-color 50ms ease-in-out 0s, border 50ms ease-in-out 0s;
    border: 1px solid rgb(236, 236, 236);
}
.load-search .dropdown.dropdown-icon button#dropdownMenuButton1:hover,
.load-search .dropdown.dropdown-icon .btn-secondary:active,
.load-search .dropdown.dropdown-icon button#dropdownMenuButton1:active:focus {
    background-color: transparent;
    border: none;
    box-shadow:none;
}
.load-search .dropdown.dropdown-icon .dropdown-menu.show {
    margin-top:0px !important;
}
.load-search .dropdown.dropdown-icon button#dropdownMenuButton1::after, .load-search .dropdown.dropdown-icon::before,
.prospecting-header .dropdown.dropdown-icon button#dropdownMenuButton1::after,.prospecting-header  .dropdown.dropdown-icon::before{
    content: "";
    border: none;
    display:none;
}


.prospecting-header .btn.pros-btn {
    font-size: 14px;
    border: 1px solid rgb(236, 236, 236);
    border-radius: 4px;
    padding: 5px 14px;
    font-weight: 600;
}
.saved-search-modal .load-search h6,.recent-company-info h6{
     font-size: 12px;
    font-weight: 400;
    color: rgb(139, 139, 139);
    letter-spacing: 0px;
    display: flex;
    align-items: center;
}
.saved-search-modal .load-search h6 small,.recent-company-info h6 small{
    padding: 2px 8px;
    background: #f6f6f6;
    font-size: 12px;
    line-height: 16px;
    color: #8b8b8b;
    border: 1px solid #c5c5c5;
    border-radius: 4px;
    margin-right: 4px;
    margin-bottom: 6px;
    max-width: 300px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: inline-block;
    margin-left: 12px;
}
.save-search-sec .title-container {
    display: flex;
}
.list-cstm .save-search-sec i {
    color: #226cf3;
    padding-right: 10px;
    font-size: 51px;
    margin: -12px 0px 0px;
}
.prospecting-header .offcanvas {
    max-width: 480px;
    padding: 12px 3px 12px 16px;
    height: 100%;
    background-color: #f6f6f6;
}
.load-search .dropdown.dropdown-icon .dropdown-menu.show {
    margin-top: 4px !important;
    color: rgb(21, 20, 23);
    width: 200px;
    border: 1px solid rgb(236, 236, 236);
    border-radius: 4px;
    box-shadow: rgb(21 20 23 / 10%) 0px 8px 16px;
    background-color: rgb(255, 255, 255);
}
.load-search .dropdown.dropdown-icon  a.dropdown-item {
    font-size: 13px;
}
.load-search .dropdown.dropdown-icon a.dropdown-item svg {
    margin-right: 10px;
}
.prospecting-header li button.btn-close {
    background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
}
.load-search .dropdown.dropdown-icon li {
    padding-bottom: 0px;
}
.prospecting-header li #offcanvasRight2 button.btn-close.text-reset,.prospecting-header li #offcanvasRight button.btn-close.text-reset {
    top: 0px;
    height: 18px;
    width: 18px;
    background-color: #ececec;
    cursor: pointer;
    border-radius: 4px;
    right: 15px;
    padding: 5px;
    font-size: 12px;
}
.filters-search-cont ul.dropdown-menu {
    padding: 10px;
}
.recent-activities-ticon {
    width: 30px;
    height: 30px;
    background-color: #ececec;
    text-align: center;
    line-height: 30px;
    margin-right: 12px;
}

.include-btn .btn-check:checked+.btn-outline-primary, .include-btn .btn-outline-primary:hover, .include-btn .btn-outline-primary:active, .include-btn .btn-outline-primary:focus,.include-btn .btn-outline-primary.active{
    background-color: #e6eeff;
    border-color: #0655ff;
    color: #0655ff;
    box-shadow: none;
}
.include-btn .btn-outline-primary {
    font-size: 12px;
    font-weight: bold;
    color: rgb(139, 139, 139);
    border-color: rgb(139, 139, 139);
}
.filter-sidebar-cont span.select2-selection.select2-selection--multiple {
    border:none !important;
}
.filter-sidebar-cont span.select2-selection.select2-selection--multiple ul {
    padding: 0px;
}
.filter-sidebar-cont span.select2-selection.select2-selection--multiple input.select2-search__field {
    font-size: 12px;
}
.select2-results ul.select2-results__options li {
    font-size: 12px;
    color: rgb(139, 139, 139);
    padding: 7px;
}
.filters-search-cont a#navbarDropdown {
    padding:10px 10px 0px;
}
.filters-search-cont .nav-item.dropdown ul.dropdown-menu.show {
    border: none;
    padding-bottom: 3px;
}
.include-btn {
    display: flex;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
     padding:17px;
}
.select2-container span.select2-results {
    position: relative;
    z-index: -1 !important;
}
.select2-container--default .select2-results>.select2-results__options {
   box-shadow: rgb(50 50 93 / 25%) 0px 13px 27px -5px, rgb(0 0 0 / 30%) 0px 8px 16px -8px;
    margin-top: 14px !important;
    padding: 10px;
    top:50px !important;
    z-index: 1;
}
.filter-sidebar-cont li.nav-item span.selection li.select2-selection__choice {
    font-weight: normal;
    font-size: 12px;
}
.select2-container span.select2-dropdown.select2-dropdown--below {
    border: none;
}
.select2-container--default .select2-results>ul#select2-answers6-results,.select2-container--default .select2-results>ul#select2-answers7-results,.select2-container--default .select2-results>ul#select2-answers8-results, .select2-container--default .select2-results>ul#select2-answers9-results,.select2-container--default .select2-results>ul#select2-answers5-results, .select2-container--default .select2-results>ul#select2-answers4-results {
    top: 0px !important;
    margin-top: 0px !important;
	width:100%
}
.select2-container--open .select2-dropdown {
    left: 0;
    border: 0px;
}
.select2-container--open .select2-dropdown--above:last-child {
    bottom: 110px !important;
}
.clear-save-btn a.clear-btn, .clear-save-btn a.save-btn {
    padding: 3px 11px !Important;
    font-size: 12px;
    border: 1px solid #d3cfcf;
    border-radius:4px;
}
.save-search-modal-cstm input[type="text"] {
    border: 1px solid #ececec !important;
}
.save-search-modal-cstm input[type="text"], .save-search-modal-cstm select {
    border: 0PX !important;
    border-radius: 4px !important;
    box-shadow: rgb(197 197 197) 0px 0px 0px 1px inset;
    background-color: rgb(255, 255, 255);
    min-height: 40px;
}
.save-search-modal-cstm input[type="text"] {
    margin-bottom: 20px;
}
.dashboard_header .header .search .ts-control {
    border: 0px;
    padding:0px;
}
.dashboard_header .header .header-search-bar {
    height: 32px;
    align-items: center;
    width: 100%;
    min-width: 400px;
}
.dashboard_header .header .header-search-bar .search {
    width: 100%;
}
.searchname-cstm button.btn {
    height: 32px;
        color: rgb(6, 85, 255);
    background-color: transparent;
    border-width:0px;
}
.searchname-cstm button.btn.save-search-btn {
    background-color: rgb(197, 197, 197);
    border: 1px solid rgb(197, 197, 197);
    color: #ffffff;
}
.load-search .dropdown-item.active,.load-search .dropdown-item:active {
    color: #000000;
    text-decoration: none;
    background-color: rgb(230, 238, 255);
}
</style>
  <!-- Bootstrap CSS -->
    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    
<section class="app"> 
  <?php
  
use Carbon\CarbonImmutable;
    use Carbon\Carbon;
   use App\Models\SaveHistory;
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
    
    <div class="container-fluid">
     <div class="row">
        <div class="col-md-2 side-content">
            @include('layouts.sidebar')
        </div>
          <div class="col-md-9 mx-auto">
            <div class="content-main" id="dashboardshow">
                <div class="row py-4 border-bottom ">
                    <div class="col-md-5 col-sm-5">
                       <div class="prospecting-header">
            <ul class=" nav nav-tabs" role="tablist">
                  <li class="active"><button role="presentation" href="#People" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-user" aria-hidden="true"></i> People (<?php echo $people_count; ?>)</button></li>
                  <li><button role="presentation" href="#Companies" aria-controls="messages" role="tab" data-toggle="tab"> <i class="fa fa-building-o" aria-hidden="true"></i> Companies (<?php echo $company_count; ?>)</button></li>
            </ul>
 
              </div> 
                    </div>
                     <div class="col-md-7 col-sm-7">
                          <div class="prospecting-header">
                  <ul class="list-unstyled p-0 list-cstm d-sm-flex m-0">
                      <li> See how Prospecting works </li>
                      <li>
                        <button class="btn pros-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Recent activity </button>
						
						
						
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                              <div class="offcanvas-header justify-content-end">
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                              </div>
                              <div class="offcanvas-body">
                                <h5 id="offcanvasRightLabel" class="fw-bold mb-0" style="line-height: .6rem;">Recent activities</h5> 
                                <p style="font-size:14px;"> Your prospecting activity over the past 30 days </p>
                                @if(!empty($get_all_history))
                               
                                @foreach($get_all_history as $key =>$history)
                                <div class="activity-content">
                                    <!--<h6> Today </h6>-->
                                    <?php
                                        $date = CarbonImmutable::now();
                                         $day = carbon::parse($history['created_at'])->diffForHumans();
                                         $time = str_replace("ago", "", $day);
                                         $checkday = $date->sub($time)->calendar();

        ?>
   
                                    <div class="data-activity-content border p-3 d-flex justify-content-between recent-activities-wrap bg-white">
                                        <div class="d-flex align-items-center">
                                             <div class="recent-activities-ticon mb-0"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                                            <h6 style="font-size:14px;"> {{$checkday}} <br> <small style="font-size: 12px; font-weight: 400; color: rgb(139, 139, 139); letter-spacing: 0px;"> Unsaved search... </small></h6>
                                        </div>
                                         <div class="load-search d-flex">
                                            
                                         <button class="btn load-search-btn searchhistory"    data-history="{{$history['id']}}"> Load Search </button>  
                                          <input type="hidden" name="history_id"  class="history_id" value="{{$history['id']}}">
                                         <input type="hidden" name="filter_type"  class="history_filter_type{{$history['id']}}" value="{{$history['filter_type']}}">
                                          <input type="hidden" name="filter_type1"  class="history_filter_type_array{{$history['id']}}" value="{{$history['title']}}">
                                          <input type="hidden" name="filter_name" class="history_filter_name{{$history['id']}}" value="{{$history['filter_name']}}">
                                         <div class="dropdown dropdown-icon ">
                                              <button class="btn dropdown-toggle border-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                               <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 2a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm0 6a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm-2 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" fill="#8B8B8B"></path></svg>
                                              </button>
                                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="">
                                               
                                                <li><a class="dropdown-item" href="{{url('/rename-history',$history['id'])}}"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.75 2c0-.966.784-1.75 1.75-1.75h3c.966 0 1.75.784 1.75 1.75v.25H15a.75.75 0 0 1 0 1.5h-.81l-.866 10.395a1.75 1.75 0 0 1-1.744 1.605H4.42a1.75 1.75 0 0 1-1.743-1.605L1.81 3.75H1a.75.75 0 0 1 0-1.5h3.75V2zm1.5.25h3.5V2a.25.25 0 0 0-.25-.25h-3a.25.25 0 0 0-.25.25v.25zm-2.935 1.5l.856 10.27c.011.13.12.23.25.23h7.159c.13 0 .238-.1.25-.23l.855-10.27H3.315zM7.25 6.5a.75.75 0 0 0-1.5 0v5a.75.75 0 0 0 1.5 0v-5zm2.25-.75a.75.75 0 0 1 .75.75v5a.75.75 0 0 1-1.5 0v-5a.75.75 0 0 1 .75-.75z" fill="#8B8B8B"></path></svg>Remove</a></li>
                                                <!--<li><a class="dropdown-item" href="#">Something else here</a></li>-->
                                              </ul>
                                          </div>    
                                              <!-- Modal -->
                                                   <!--*********** Model Code *************-->


                   
                    
                         
                                
                    </div>
                                        
                                        
                                        
                                        
                                        
                                    </div>
                                     <div class=" border recent-company-info p-3 bg-white">
                                        <div>
                                            <h6 class="mb-0 pb-0"> {{$history['filter_name']}} : <small class="mb-0 pb-0">{{$history['title']}} </small></h6>
                                        </div>
                                        
                                    </div><br>
                                     @endforeach
                                @endif
                                </div>
                               
                              </div>
                            </div>
                      </li>
                        <li>

                       <button class="btn pros-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight2">Saved searches</button>


                          
                 <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRightLabel">
                      <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel"></h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body save-search-sec">
                          <div class="title-container">
                            <i class="fa fa-bookmark" aria-hidden="true"></i>
                            <div class="title-text">
                                <h5 id="offcanvasRightLabel" class="fw-bold m-0 p-0" style="line-height: .6rem;">Saved searches</h5> 
                                <p style="font-size: 14px; font-weight: 400; color: rgb(139, 139, 139); letter-spacing: 0px;"> Load and edit your searches </p>
                            </div>
                            </div>

                            
                                <div class="activity-content">
                                    <!--<h6> Today </h6>-->
                                   
                                     <?php
                              
                                ?>
                                    <div class="data-activity-content saved-search-modal">
                                           @if(!empty($get_all_save_history))
                                @foreach($get_all_save_history as $key =>$savevalue)
                                 <?php

                               //  dd(str_replace(" ","",$savevalue['save_name'])); die;
                                 
                                    $checkdate = SaveHistory::where('save_name',$savevalue['save_name'])->orderBy('id', 'DESC')->first();
                                    
                                         if($checkdate['save_name'] == $savevalue['save_name']){
                                             $history_id = $checkdate['id'];
                                             $filter_type = $checkdate['filter_type'];
                                             $title = $checkdate['title'];
                                             $filter_name = $checkdate['filter_name'];
                                             $created_at = carbon::parse($checkdate['created_at'])->diffForHumans();
                                         }
                            
                                             ?>
                                               <div class="saved-search-text">
                                        <div class="load-search d-flex justify-content-between border p-3 bg-white">
                                        <div class="">
                                            <h6 class="m-0 p-0" style="font-size: 14px;line-height: 1.15;color:#000000;"> </i> {{$savevalue['save_name']}}  </h6>
                                            <p class="m-0 p-0" style="font-size: 12px; font-weight: 400; color: rgb(139, 139, 139);line-height: 1.15;">{{$created_at}}</p> 
                                        </div>
                                         <div class="d-flex">
                                    <button class="btn load-search-btn searchsavedhistory" data-history="{{$history_id}}"> Load Search </button> 
                                         <input type="hidden" name="history_id"  class="history_id" value="{{$history_id}}">
                                         <input type="hidden" name="filter_type"  class="history_filter_type{{$history_id}}" value="{{$filter_type}}">
                                          <input type="hidden" name="filter_type1"  class="history_filter_type_array{{$history_id}}" value="{{ucfirst(strtolower($title))}}">
                                          <input type="hidden" name="filter_name" class="history_filter_name{{$history_id}}" value="{{$filter_name}}">
                                         <div class="dropdown dropdown-icon ">
                                              <button class="btn dropdown-toggle border-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                               <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 2a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm0 6a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm-2 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" fill="#8B8B8B"></path></svg>
                                              </button>
                                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="">
                                                <li><a class="dropdown-item"data-bs-toggle="modal" href="#exampleModalToggle{{str_replace(" ","",$savevalue['save_name'])}}"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.607 1.137a3.014 3.014 0 0 1 4.263-.009v.001l.009.008.008.009.006.006a3.013 3.013 0 0 1-.047 4.257l-9.02 9.02a.75.75 0 0 1-.343.196l-4.297 1.102a.75.75 0 0 1-.912-.913l1.1-4.296a.75.75 0 0 1 .197-.345l.01-.009 9.012-9.013.008-.007.006-.007zM2.502 12.162l-.46 1.797 1.798-.461-1.338-1.336zm2.797.673l-2.136-2.133L10.866 3 13 5.134l-7.7 7.7zM13.811 2.19a1.515 1.515 0 0 0-1.854-.221l2.073 2.073a1.514 1.514 0 0 0-.207-1.84l-.005-.005-.007-.007z" fill="#8B8B8B"></path></svg>Rename</a></li>
                                                <li><a class="dropdown-item" href="{{url('/remove-save-history',$savevalue['save_name'])}}"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.75 2c0-.966.784-1.75 1.75-1.75h3c.966 0 1.75.784 1.75 1.75v.25H15a.75.75 0 0 1 0 1.5h-.81l-.866 10.395a1.75 1.75 0 0 1-1.744 1.605H4.42a1.75 1.75 0 0 1-1.743-1.605L1.81 3.75H1a.75.75 0 0 1 0-1.5h3.75V2zm1.5.25h3.5V2a.25.25 0 0 0-.25-.25h-3a.25.25 0 0 0-.25.25v.25zm-2.935 1.5l.856 10.27c.011.13.12.23.25.23h7.159c.13 0 .238-.1.25-.23l.855-10.27H3.315zM7.25 6.5a.75.75 0 0 0-1.5 0v5a.75.75 0 0 0 1.5 0v-5zm2.25-.75a.75.75 0 0 1 .75.75v5a.75.75 0 0 1-1.5 0v-5a.75.75 0 0 1 .75-.75z" fill="#8B8B8B"></path></svg>Remove</a></li>
                                                <!--<li><a class="dropdown-item" href="#">Something else here</a></li>-->
                                              </ul>
                                          </div>
                                           </div> 
                                           </div> 
                                        <div class="load-search">
                                             
                                              <!-- Modal -->
                                                   <!--*********** Model Code *************-->

                    <div class="modal fade searchname-cstm" id="exampleModalToggle{{str_replace(" ","",$savevalue['save_name'])}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                    	  <div class="row">
                           <div class="col-md-12"><h5 class="modal-title" id="exampleModalToggleLabel">Save your search</h5> </div>
                            <div class="col-md-11"><p>Give your search a name. Search name will allow you to easily find it and continue where you left off.</p> </div>
                           <div class="col-md-1"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <form method="post" action="{{url('/rename-save-history',$savevalue['save_name'])}}">
                              <div class="modal-body">
                              
                                    @csrf
                                    <div class="col-md-12" style="display: flex;">
                                         <label for="vehicle1"> Search name</label></div>
                                             <div class="col-md-12">
                                            <input type="text" name="save_name" value="{{$savevalue['save_name']}}" placeholder="Search name">
                                      </div>
                                                                                  
                                <div class="modal-footer">
                                <button class="btn">Close</button> <button class="btn save-search-btn" >Save Search</button>
                                </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
       <!--*********** End Model Code *************-->
                                            </div>
                                        </div>
                    
                                     <div class="p-3 border border-top-0 bg-white">
                                        <div>
                                            <?php
                                            
                                           //  dd($get_group_history);die;
                                            ?>
                                            @foreach($get_group_history as $key =>$grouphistory)
                                            
                                             @if($grouphistory['save_name'] == $savevalue['save_name'])
                                             
                                             
                                             @if($grouphistory['filter_type'] == "job_company_name" )
                                               <?php   $name = "Company name"; ?>
                                             @elseif($grouphistory['filter_type'] == "job_company_location_name")
                                            <?php  $name = "Company HQ location"; ?>
                                             @elseif($grouphistory['filter_type'] == "job_company_industry")
                                             <?php $name = "Industry"; ?>
                                              @elseif($grouphistory['filter_type'] == "job_company_size")
                                              <?php  $name = "Employee headcount"; ?>
                                                
                                                @elseif($grouphistory['filter_type'] == "job_company_founded")
                                             <?php   $name = "Year founded"; ?>
                                                @elseif($grouphistory['filter_type'] == "contact_name" && $grouphistory['filter_name'] == "Contact name")
                                             <?php   $name = "Contact name"; ?>
                                                @elseif($grouphistory['filter_type'] == "job_company_location_country")
                                             <?php   $name = "Contact location"; ?>
                                              @elseif($grouphistory['filter_type'] == "job_title_role" && $grouphistory['filter_name'] == "Seniority")
                                             <?php   $name = "Seniority"; ?>
                                                @elseif($grouphistory['filter_type'] == "job_title_role")
                                             <?php   $name = "Department"; ?>
                                                
                                                 
                                                  @elseif($grouphistory['filter_type'] == "job_title")
                                             <?php   $name = "Job title"; ?>
                                               @endif
                                               
                                            <h6> {{ @$name }}: <small>{{$grouphistory['title']}} </small></h6>
                                            @endif
                                             @endforeach
                                        </div>
                                        
                                    </div><br>
                                     @endforeach
                                @endif 
                                
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
                <div class="col-lg-3 col-md-12 filter-sidebar-cont">
                    <div class="wrapper prospecting-accordions bg-white rounded shadow-2 my-4 my-lg-0 filters-search-cont">
 
    <div class="accordion accordion-flush border-top border-start border-end" id="myAccordion">
        <div class="accordion-item border-0">
             <button class="accordion-button collapsed border-0 d-grid pb-0" style="border-width:0px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"><h5> Filters</h5></button>
           <div class="clear-save-btn mb-2 text-center">
            <a class="clear-btn p-2 me-2" href="">Clear All<i class="fa fa-times ms-1" aria-hidden="true"></i> </a>
            <a class="save-btn" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Save Search</a>
          </div>  
        </div> 
       <div class="accordion-item border-0" >
           
<!--*********** Model Code *************-->


<div class="modal fade save-search-modal-cstm" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
	  <div class="row">
       <div class="col-md-12"><h5 class="modal-title" id="exampleModalToggleLabel">Save your search</h5> </div>
        <div class="col-md-11"><p>Give your search a name. Search name will allow you to easily find it and continue where you left off.</p> </div>
       <div class="col-md-1"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
       
      <div class="modal-body">
       <form>

            <div class="col-md-12" style="display: flex;">
                <input type="radio" id="save-box" name="type" class="enableinput" value="1" checked>
            <label for="vehicle1"> Save a new search</label></div>
            <div class="col-md-12"><input type="text" id="savename1" name="save_name" placeholder="Example: United States, 100-500, Internet"></div>
            
            <div class="col-md-12" style="display: flex;">
                <input type="radio" id="save-box" class="checktype" name="type" value="2">
                <label for="vehicle1">Update existing search</label></div>
            
            <div class="col-md-12">
                <select class="select-opt" id="savename1" name="save_name">
                    @if(!empty($get_all_save_history))
                    @foreach($get_all_save_history as $key =>$save_val)
                    <option value="">Select...</option>
                    <option value="{{$save_val['save_name'] }}">{{$save_val['save_name'] }}</option>
                    @endforeach
                    @else
                     <option value="">Select...</option>
                    <option value="hurr">No Data Found</option>
                    @endif
                </select>
            </div>
            </div>
            </form>
</div>
      </div>
      <div class="modal-footer">
        <button class="btn">Close</button> <button class="search-btn" id="savehistory">Save Search</button>
      </div>
    </div>
  </div>
</div>


       <!--*********** End Model Code *************-->
    
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Company Name
             <!--<input type="text" id="fname" placeholder="search" name="fname" autocomplete="off-->
              <select id="answers1" class="js-states form-control answ1" multiple="false" >

           <?php  if($company_list){
                            
                         foreach($company_list->data as $row){
                                        $_id = (array)$row->_id;
                                        
                                        if($row->job_company_name){?>
                                        
                                    <option data-value="<?php if(isset($_id['$oid'])) echo $_id['$oid']; ?>" value="<?php echo $row->job_company_name;?>" data-name="job_company_name" ><?php echo ucwords(strtolower($row->job_company_name)); ?>
                                    
                                    
                                     <?php  }}
                                     }?>
                                     </option>
          </select>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
           
         
            
             <input type="hidden" id="filter-data1" placeholder="search"  value="" name="fname" autocomplete="off">
             
<!--<div class="include-btn">-->
<!--    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">-->
<!--        <label class="btn btn-outline-primary" for="btnradio1">Include</label>-->
<!--        <label class="btn btn-outline-primary" for="btnradio2">Exclude</label>-->
<!--    </div>-->
<!--</div>-->
            </ul>
            </li>            
    </div>
    
       <div class="accordion-item border-0" >
       
           
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Company HQ location
            <!--<input type="text" id="fname"placeholder="Enter company location" name="fname" autocomplete="off">-->
             <select id="answers2" class="js-states form-control answ1 filter-slct-scont" multiple="false" autocomplete="off">
            <?php  if($job_company_location_name){
                         foreach($job_company_location_name as $row){
                                        $_id = (array)$row->_id;
                                        if($row->job_company_location_name){ ?>
                                    <option data-value="<?php if(isset($_id['$oid'])) echo $_id['$oid']; ?>" value="<?php echo $row->job_company_location_name;?>"><?php echo  ucwords(strtolower($row->job_company_location_name));?></option>
                                     <?php   }
                                        }
                                     }?>
                                     
          </select>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
           
         
 
           <input type="hidden" id="filter-data2" placeholder="search"  value="" name="fname" autocomplete="off">
            </ul>
            </li>            
    </div> 
       <div class="accordion-item border-0" >
       
           
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Industry
            <!--<input type="text" id="fname"placeholder="Enter Industry" name="fname" autocomplete="off">-->
                 <select id="answers3" class="js-states form-control answ1" multiple="false" autocomplete="off">

                  <?php   if($job_company_industry){
                     foreach($job_company_industry as $row){
                                    $_id = (array)$row->_id;
                                    if($row->job_company_industry){?>
                            <option data-value="<?php if(isset($_id['$oid'])) echo $_id['$oid']; ?>" value="<?php echo $row->job_company_industry;?>"><?php echo ucwords(strtolower($row->job_company_industry));?></option>
                             <?php }
                                }
                             }?>
          </select>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
           
     
            
             <input type="hidden" id="filter-data3" placeholder="search"  value="" name="fname" autocomplete="off">
  
          
            </ul>
            </li>            
    </div> 
        
 
       <div class="accordion-item border-0" >
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Employee headcount
                        <!--<input type="text" id="fname"placeholder="Enter Employee" name="fname" autocomplete="off">-->
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
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

           <input type="hidden" id="filter-data4" placeholder="search"  value="" name="fname" autocomplete="off">
            </ul>
            </li>            
    </div> 
    
       <div class="accordion-item border-0" >
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Year founded
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
             <!--<input type="text" id="fname"placeholder="Enter Year" name="fname" autocomplete="off">-->
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

           <input type="hidden" id="filter-data5" placeholder="search"  value="" name="fname" autocomplete="off">
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
                   <select id="answers6" class="js-states form-control answ1" multiple="false" autocomplete="off">
                     <?php  if($job_title){
                     foreach($job_title as $row){
                                    $_id = (array)$row->_id;
                                    //dd($row->job_company_founded); 
                                    if($row->job_title){?>
                            <option data-value="<?php if(isset($_id['$oid'])) echo $_id['$oid']; ?>" value="<?php echo $row->job_title;?>"><?php echo ucwords(strtolower($row->job_title));?></option>
                             <?php  }
                                 }
                             }?>
          </select>
           <!--<input type="text" id="fname"placeholder="Enter Contact Name" name="fname" autocomplete="off">-->
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
  
           <input type="hidden" id="filter-data6" placeholder="search"  value="" name="fname" autocomplete="off">
            </ul>
            </li>            
      </div> 
    
    <div class="accordion-item border-0" >
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Contact location
                <select id="answers7" class="js-states form-control answ1" multiple="false" autocomplete="off">
                   <?php  if($job_company_location_country){
                     foreach($job_company_location_country as $row){
                                    $_id = (array)$row->_id;
                                    if($row->job_company_location_country){?>
                            <option data-value="<?php if(isset($_id['$oid'])) echo $_id['$oid']; ?>" value="<?php echo $row->job_company_location_country;?>"><?php echo ucwords(strtolower($row->job_company_location_country));?></option>
                             <?php  }
                                 }
                             }?>
          </select>
            <input type="hidden" id="filter-data7" placeholder="search"  value="" name="fname" autocomplete="off">
          </a>
            </li>            
    </div> 
    
     <div class="accordion-item border-0" >
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Department
                  <select id="answers8" class="js-states form-control answ1" multiple="false" autocomplete="off">
                   <?php  if($job_title_role){
                     foreach($job_title_role as $row){
                                    $_id = (array)$row->_id;
                                    if($row->job_title_role){?>
                            <option data-value="<?php if(isset($_id['$oid'])) echo $_id['$oid']; ?>" value="<?php echo $row->job_title_role;?>"><?php echo ucwords(strtolower($row->job_title_role));?></option>
                             <?php  }
                                 }
                             }?>
          </select>
          <!--<input type="text" id="fname"placeholder="Enter Department" name="fname" autocomplete="off">-->
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
  
           <input type="hidden" id="filter-data8" placeholder="search"  value="" name="fname" autocomplete="off">
            </ul>
            </li>            
    </div> 

<div class="accordion-item border-0" >
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Seniority
          <!--<input type="text" id="fname"placeholder="Enter Seniority" name="fname" autocomplete="off">-->
                    <select id="answers9" class="js-states form-control answ1" multiple="false" autocomplete="off">
                   <?php  if($job_title_role){
                     foreach($job_title_role as $row){
                                    $_id = (array)$row->_id;
                                    if($row->job_title_role){?>
                            <option data-value="<?php if(isset($_id['$oid'])) echo $_id['$oid']; ?>" value="<?php echo $row->job_title_role;?>"><?php echo ucwords(strtolower($row->job_title_role));?></option>
                             <?php  }
                                 }
                             }?>
          </select>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

           <input type="hidden" id="filter-data9" placeholder="search"  value="" name="fname" autocomplete="off">
            </ul>
            </li>            
    </div> 
    
    <div class="accordion-item border-0" >
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Job title
          <!--<input type="text" id="fname"placeholder="Enter Job title" name="fname" autocomplete="off" autocomplete="off">-->
                  <select id="answers10" class="js-states form-control answ1" multiple="false" autocomplete="off">
                   <?php  if($job_title){
                     foreach($job_title as $row){
                                    $_id = (array)$row->_id;
                                    if($row->job_title){?>
                            <option data-value="<?php if(isset($_id['$oid'])) echo $_id['$oid']; ?>" value="<?php echo $row->job_title;?>"><?php echo ucwords(strtolower($row->job_title));?></option>
                             <?php  }
                                 }
                             }?>
          </select>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
  
           <input type="hidden" id="filter-data10" placeholder="search"  value="" name="fname" autocomplete="off">
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
<input type="hidden" value="{{@$_REQUEST['job_company_name']}}" id="headesearchname">



<!-- end save detail model -->
     
    @endforeach
 
</section>

 @include("layouts.prospecting_filter_js");
 
@endsection  
  

