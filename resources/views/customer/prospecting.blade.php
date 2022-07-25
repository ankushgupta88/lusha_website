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
   top: 55px !important;
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
   .prospective_company_head {
   width: auto !important;
   }
   .procpective-detail-button {
        text-align: center;
   }
    .procpective-detail-button button.float-end {
       float:inherit !important;
       
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
            <li class="active"><button role="presentation" href="#People" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-user" aria-hidden="true"></i> People (86524)</button></li>
            <li><button role="presentation" href="#Companies" aria-controls="messages" role="tab" data-toggle="tab"> <i class="fa fa-building-o" aria-hidden="true"></i> Companies (246972) </button></li>
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
                     <?php $date = CarbonImmutable::now();
                        $day = carbon::parse($history['created_at'])->diffForHumans();
                        $time = str_replace("ago", "", $day);
                        $checkday = $date->sub($time)->calendar(); ?>
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
                                 <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 2a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm0 6a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm-2 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" fill="#8B8B8B"></path>
                                 </svg>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="">
                                 <li>
                                    <a class="dropdown-item" href="{{url('/rename-history',$history['id'])}}">
                                       <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M4.75 2c0-.966.784-1.75 1.75-1.75h3c.966 0 1.75.784 1.75 1.75v.25H15a.75.75 0 0 1 0 1.5h-.81l-.866 10.395a1.75 1.75 0 0 1-1.744 1.605H4.42a1.75 1.75 0 0 1-1.743-1.605L1.81 3.75H1a.75.75 0 0 1 0-1.5h3.75V2zm1.5.25h3.5V2a.25.25 0 0 0-.25-.25h-3a.25.25 0 0 0-.25.25v.25zm-2.935 1.5l.856 10.27c.011.13.12.23.25.23h7.159c.13 0 .238-.1.25-.23l.855-10.27H3.315zM7.25 6.5a.75.75 0 0 0-1.5 0v5a.75.75 0 0 0 1.5 0v-5zm2.25-.75a.75.75 0 0 1 .75.75v5a.75.75 0 0 1-1.5 0v-5a.75.75 0 0 1 .75-.75z" fill="#8B8B8B"></path>
                                       </svg>
                                       Remove
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class=" border recent-company-info p-3 bg-white">
                        <div>
                           <h6 class="mb-0 pb-0"> {{$history['filter_name']}} : <small class="mb-0 pb-0">{{$history['title']}} </small></h6>
                        </div>
                     </div>
                     <br>
                  </div>
                  @endforeach
                  @endif
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
                                       <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M10 2a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm0 6a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm-2 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" fill="#8B8B8B"></path>
                                       </svg>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="">
                                       <li>
                                          <a class="dropdown-item"data-bs-toggle="modal" href="#exampleModalToggle{{str_replace(" ","",$savevalue['save_name'])}}">
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M10.607 1.137a3.014 3.014 0 0 1 4.263-.009v.001l.009.008.008.009.006.006a3.013 3.013 0 0 1-.047 4.257l-9.02 9.02a.75.75 0 0 1-.343.196l-4.297 1.102a.75.75 0 0 1-.912-.913l1.1-4.296a.75.75 0 0 1 .197-.345l.01-.009 9.012-9.013.008-.007.006-.007zM2.502 12.162l-.46 1.797 1.798-.461-1.338-1.336zm2.797.673l-2.136-2.133L10.866 3 13 5.134l-7.7 7.7zM13.811 2.19a1.515 1.515 0 0 0-1.854-.221l2.073 2.073a1.514 1.514 0 0 0-.207-1.84l-.005-.005-.007-.007z" fill="#8B8B8B"></path>
                                          </svg>
                                          Rename</a>
                                       </li>
                                       <li>
                                          <a class="dropdown-item" href="{{url('/remove-save-history',$savevalue['save_name'])}}">
                                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.75 2c0-.966.784-1.75 1.75-1.75h3c.966 0 1.75.784 1.75 1.75v.25H15a.75.75 0 0 1 0 1.5h-.81l-.866 10.395a1.75 1.75 0 0 1-1.744 1.605H4.42a1.75 1.75 0 0 1-1.743-1.605L1.81 3.75H1a.75.75 0 0 1 0-1.5h3.75V2zm1.5.25h3.5V2a.25.25 0 0 0-.25-.25h-3a.25.25 0 0 0-.25.25v.25zm-2.935 1.5l.856 10.27c.011.13.12.23.25.23h7.159c.13 0 .238-.1.25-.23l.855-10.27H3.315zM7.25 6.5a.75.75 0 0 0-1.5 0v5a.75.75 0 0 0 1.5 0v-5zm2.25-.75a.75.75 0 0 1 .75.75v5a.75.75 0 0 1-1.5 0v-5a.75.75 0 0 1 .75-.75z" fill="#8B8B8B"></path>
                                             </svg>
                                             Remove
                                          </a>
                                       </li>
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
                                          <div class="col-md-12">
                                             <h5 class="modal-title" id="exampleModalToggleLabel">Save your search</h5>
                                          </div>
                                          <div class="col-md-11">
                                             <p>Give your search a name. Search name will allow you to easily find it and continue where you left off.</p>
                                          </div>
                                          <div class="col-md-1"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                          <form method="post" action="{{url('/rename-save-history',$savevalue['save_name'])}}">
                                             <div class="modal-body">
                                                @csrf
                                                <div class="col-md-12" style="display: flex;">
                                                   <label for="vehicle1"> Search name</label>
                                                </div>
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
                           </div>
                           <br>
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
                  <button class="accordion-button collapsed border-0 d-grid pb-0" style="border-width:0px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                     <h5> Filters</h5>
                  </button>
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
                                 <div class="col-md-12">
                                    <h5 class="modal-title" id="exampleModalToggleLabel">Save your search</h5>
                                 </div>
                                 <div class="col-md-11">
                                    <p>Give your search a name. Search name will allow you to easily find it and continue where you left off.</p>
                                 </div>
                                 <div class="col-md-1"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                 <div class="modal-body">
                                    <form>
                                       <div class="col-md-12" style="display: flex;">
                                          <input type="radio" id="save-box" name="type" class="enableinput" value="1" checked>
                                          <label for="vehicle1"> Save a new search</label>
                                       </div>
                                       <div class="col-md-12"><input type="text" id="savename1" name="save_name" placeholder="Example: United States, 100-500, Internet"></div>
                                       <div class="col-md-12" style="display: flex;">
                                          <input type="radio" id="save-box" class="checktype" name="type" value="2">
                                          <label for="vehicle1">Update existing search</label>
                                       </div>
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
                        <select id="answers1" class="js-states form-control answ1 select2-hidden-accessible" multiple="" data-select2-id="answers1" tabindex="-1" aria-hidden="true">
                           <option data-value="amazon" value="amazon" data-name="job_company_name" data-select2-id="23">Amazon</option>
                           <option data-value="623f0b8a24ddd115d6bd4026" value="tata consultancy services" data-name="job_company_name" data-select2-id="24">Tata Consultancy Services </option>
                           <option data-value="623f0b8a24ddd115d6bd4028" value="d-w" data-name="job_company_name" data-select2-id="25">D-w </option>
                           <option data-value="623f0b8a24ddd115d6bd4029" value="takhar ttc" data-name="job_company_name" data-select2-id="26">Takhar Ttc </option>
                           <option data-value="623f0b8a24ddd115d6bd402b" value="dost construction &amp; logistic company" data-name="job_company_name" data-select2-id="27">Dost Construction &amp; Logistic Company </option>
                           <option data-value="623f0b8a24ddd115d6bd402c" value="roshan qadri construction company" data-name="job_company_name" data-select2-id="28">Roshan Qadri Construction Company </option>
                           <option data-value="623f0b8a24ddd115d6bd402e" value="military officers association of america (moaa)" data-name="job_company_name" data-select2-id="29">Military Officers Association Of America (moaa) </option>
                           <option data-value="623f0b8a24ddd115d6bd4032" value="goverment development projects" data-name="job_company_name" data-select2-id="30">Goverment Development Projects </option>
                           <option data-value="623f0b8a24ddd115d6bd4033" value="mmcc consultants" data-name="job_company_name" data-select2-id="31">Mmcc Consultants </option>
                           <option data-value="623f0b8a24ddd115d6bd4035" value="gardaworld federal services" data-name="job_company_name" data-select2-id="32">Gardaworld Federal Services </option>
                           <option data-value="623f0b8a24ddd115d6bd4036" value="dai" data-name="job_company_name" data-select2-id="33">Dai </option>
                           <option data-value="623f0b8a24ddd115d6bd4038" value="magicbricks realty services limited" data-name="job_company_name" data-select2-id="34">Magicbricks Realty Services Limited </option>
                           <option data-value="623f0b8a24ddd115d6bd403b" value="afghanistan central bank (da afghanistan bank - dab)" data-name="job_company_name" data-select2-id="35">Afghanistan Central Bank (da Afghanistan Bank - Dab) </option>
                           <option data-value="623f0b8a24ddd115d6bd403f" value="ps design" data-name="job_company_name" data-select2-id="36">Ps Design </option>
                           <option data-value="623f0b8a24ddd115d6bd4041" value="global mercado del turismo" data-name="job_company_name" data-select2-id="37">Global Mercado Del Turismo </option>
                           <option data-value="623f0b8a24ddd115d6bd4042" value="seer technologies, inc." data-name="job_company_name" data-select2-id="38">Seer Technologies, Inc. </option>
                           <option data-value="623f0b8a24ddd115d6bd4043" value="no lemon int'l fze" data-name="job_company_name" data-select2-id="39">No Lemon Int'l Fze </option>
                           <option data-value="623f0b8a24ddd115d6bd4044" value="hummingbird ideas" data-name="job_company_name" data-select2-id="40">Hummingbird Ideas </option>
                           <option data-value="623f0b8a24ddd115d6bd4045" value="saic" data-name="job_company_name" data-select2-id="41">Saic </option>
                           <option data-value="623f0b8a24ddd115d6bd4047" value="albadar hospital" data-name="job_company_name" data-select2-id="42">Albadar Hospital </option>
                           <option data-value="623f0b8a24ddd115d6bd4048" value="edinburgh international" data-name="job_company_name" data-select2-id="43">Edinburgh International </option>
                           <option data-value="623f0b8a24ddd115d6bd404a" value="every companies" data-name="job_company_name" data-select2-id="44">Every Companies </option>
                           <option data-value="623f0b8a24ddd115d6bd404e" value="zncc" data-name="job_company_name" data-select2-id="45">Zncc </option>
                           <option data-value="623f0b8a24ddd115d6bd404f" value="wcc" data-name="job_company_name" data-select2-id="46">Wcc </option>
                           <option data-value="623f0b8a24ddd115d6bd4050" value="ministry of commerce &amp; industries" data-name="job_company_name" data-select2-id="47">Ministry Of Commerce &amp; Industries </option>
                           <option data-value="623f0b8a24ddd115d6bd4052" value="dawioil" data-name="job_company_name" data-select2-id="48">Dawioil </option>
                           <option data-value="623f0b8a24ddd115d6bd4053" value="owais enterprise" data-name="job_company_name" data-select2-id="49">Owais Enterprise </option>
                           <option data-value="623f0b8a24ddd115d6bd4054" value="nangarhar chamber of commerce &amp; industries" data-name="job_company_name" data-select2-id="50">Nangarhar Chamber Of Commerce &amp; Industries </option>
                           <option data-value="623f0b8a24ddd115d6bd4055" value="independent election commission" data-name="job_company_name" data-select2-id="51">Independent Election Commission </option>
                           <option data-value="623f0b8a24ddd115d6bd4056" value="lapis communications" data-name="job_company_name" data-select2-id="52">Lapis Communications </option>
                           <option data-value="623f0b8a24ddd115d6bd405a" value="al-futtaim" data-name="job_company_name" data-select2-id="53">Al-futtaim </option>
                           <option data-value="623f0b8a24ddd115d6bd405b" value="ansari high school" data-name="job_company_name" data-select2-id="54">Ansari High School </option>
                           <option data-value="623f0b8a24ddd115d6bd405d" value="statistics and information analysis unit" data-name="job_company_name" data-select2-id="55">Statistics And Information Analysis Unit </option>
                           <option data-value="623f0b8a24ddd115d6bd405f" value="afghanistan international bank" data-name="job_company_name" data-select2-id="56">Afghanistan International Bank </option>
                           <option data-value="623f0b8a24ddd115d6bd4060" value="hntpo" data-name="job_company_name" data-select2-id="57">Hntpo </option>
                           <option data-value="623f0b8a24ddd115d6bd4061" value="iarcsc" data-name="job_company_name" data-select2-id="58">Iarcsc </option>
                           <option data-value="623f0b8a24ddd115d6bd4063" value="cai" data-name="job_company_name" data-select2-id="59">Cai </option>
                           <option data-value="623f0b8a24ddd115d6bd4066" value="private" data-name="job_company_name" data-select2-id="60">Private </option>
                           <option data-value="623f0b8a24ddd115d6bd4067" value="shamshad" data-name="job_company_name" data-select2-id="61">Shamshad </option>
                           <option data-value="623f0b8a24ddd115d6bd4069" value="mrrd" data-name="job_company_name" data-select2-id="62">Mrrd </option>
                           <option data-value="623f0b8a24ddd115d6bd406a" value="work force organization" data-name="job_company_name" data-select2-id="63">Work Force Organization </option>
                           <option data-value="623f0b8a24ddd115d6bd406c" value="international committee of the red cross - icrc" data-name="job_company_name" data-select2-id="64">International Committee Of The Red Cross - Icrc </option>
                           <option data-value="623f0b8a24ddd115d6bd406d" value="nh hotel group" data-name="job_company_name" data-select2-id="65">Nh Hotel Group </option>
                           <option data-value="623f0b8a24ddd115d6bd406f" value="wyh importados" data-name="job_company_name" data-select2-id="66">Wyh Importados </option>
                           <option data-value="623f0b8a24ddd115d6bd4075" value="amry astro group, inc." data-name="job_company_name" data-select2-id="67">Amry Astro Group, Inc. </option>
                           <option data-value="623f0b8a24ddd115d6bd4077" value="building markets international" data-name="job_company_name" data-select2-id="68">Building Markets International </option>
                           <option data-value="623f0b8a24ddd115d6bd4078" value="peasaran haji baba company" data-name="job_company_name" data-select2-id="69">Peasaran Haji Baba Company </option>
                           <option data-value="623f0b8a24ddd115d6bd407a" value="afghan morvarid stone mining company" data-name="job_company_name" data-select2-id="70">Afghan Morvarid Stone Mining Company </option>
                           <option data-value="623f0b8a24ddd115d6bd407b" value="ministry of urban development and housing afghanistan" data-name="job_company_name" data-select2-id="71">Ministry Of Urban Development And Housing Afghanistan </option>
                           <option data-value="623f0b8a24ddd115d6bd407c" value="fao-un afghanistan" data-name="job_company_name" data-select2-id="72">Fao-un Afghanistan </option>
                           <option data-value="623f0b8a24ddd115d6bd407f" value="ronco consulting corporation" data-name="job_company_name" data-select2-id="73">Ronco Consulting Corporation </option>
                           <option data-value="623f0b8a24ddd115d6bd4082" value="private ompany" data-name="job_company_name" data-select2-id="74">Private Ompany </option>
                           <option data-value="623f0b8a24ddd115d6bd4084" value="the dial corporation" data-name="job_company_name" data-select2-id="75">The Dial Corporation </option>
                           <option data-value="623f0b8a24ddd115d6bd4086" value="alliança home life seduc" data-name="job_company_name" data-select2-id="76">Alliança Home Life Seduc </option>
                           <option data-value="623f0b8a24ddd115d6bd4089" value="microsoft" data-name="job_company_name" data-select2-id="77">Microsoft </option>
                           <option data-value="623f0b8a24ddd115d6bd408a" value="thyssenkrupp industrial solutions india" data-name="job_company_name" data-select2-id="78">Thyssenkrupp Industrial Solutions India </option>
                           <option data-value="623f0b8a24ddd115d6bd408b" value="brac" data-name="job_company_name" data-select2-id="79">Brac </option>
                           <option data-value="623f0b8a24ddd115d6bd408c" value="ministry of information" data-name="job_company_name" data-select2-id="80">Ministry Of Information </option>
                           <option data-value="623f0b8a24ddd115d6bd408d" value="mazar sbu-auwssc" data-name="job_company_name" data-select2-id="81">Mazar Sbu-auwssc </option>
                           <option data-value="623f0b8a24ddd115d6bd408e" value="mujtaba ali hamza trading company" data-name="job_company_name" data-select2-id="82">Mujtaba Ali Hamza Trading Company </option>
                           <option data-value="623f0b8a24ddd115d6bd4090" value="national procurement authority (npa)" data-name="job_company_name" data-select2-id="83">National Procurement Authority (npa) </option>
                           <option data-value="623f0b8a24ddd115d6bd4091" value="!mikro computer consulting" data-name="job_company_name" data-select2-id="84">!mikro Computer Consulting </option>
                           <option data-value="623f0b8a24ddd115d6bd4092" value="apple" data-name="job_company_name" data-select2-id="85">Apple </option>
                           <option data-value="623f0b8a24ddd115d6bd4093" value="brishna noor" data-name="job_company_name" data-select2-id="86">Brishna Noor </option>
                           <option data-value="623f0b8a24ddd115d6bd4095" value="ministry of foreign affairs afghanistan" data-name="job_company_name" data-select2-id="87">Ministry Of Foreign Affairs Afghanistan </option>
                           <option data-value="623f0b8a24ddd115d6bd4097" value="sustainable energy services afghanistan (sesa)" data-name="job_company_name" data-select2-id="88">Sustainable Energy Services Afghanistan (sesa) </option>
                           <option data-value="623f0b8a24ddd115d6bd409b" value="wco flooring america" data-name="job_company_name" data-select2-id="89">Wco Flooring America </option>
                           <option data-value="623f0b8a24ddd115d6bd409d" value="first own" data-name="job_company_name" data-select2-id="90">First Own </option>
                           <option data-value="623f0b8a24ddd115d6bd409f" value="iternational rescue committee" data-name="job_company_name" data-select2-id="91">Iternational Rescue Committee </option>
                           <option data-value="623f0b8a24ddd115d6bd40a0" value="hirschfeld consulting services" data-name="job_company_name" data-select2-id="92">Hirschfeld Consulting Services </option>
                           <option data-value="623f0b8a24ddd115d6bd40a2" value="nice.insititute" data-name="job_company_name" data-select2-id="93">Nice.insititute </option>
                           <option data-value="623f0b8a24ddd115d6bd40a3" value="apl" data-name="job_company_name" data-select2-id="94">Apl </option>
                           <option data-value="623f0b8a24ddd115d6bd40a4" value="undp idlg" data-name="job_company_name" data-select2-id="95">Undp Idlg </option>
                           <option data-value="623f0b8a24ddd115d6bd40a5" value="the world bank" data-name="job_company_name" data-select2-id="96">The World Bank </option>
                           <option data-value="623f0b8a24ddd115d6bd40a6" value="rockwell collins" data-name="job_company_name" data-select2-id="97">Rockwell Collins </option>
                           <option data-value="623f0b8a24ddd115d6bd40a7" value="afghanistan" data-name="job_company_name" data-select2-id="98">Afghanistan </option>
                           <option data-value="623f0b8a24ddd115d6bd40a8" value="nosco consulting" data-name="job_company_name" data-select2-id="99">Nosco Consulting </option>
                           <option data-value="623f0b8a24ddd115d6bd40aa" value="undp" data-name="job_company_name" data-select2-id="100">Undp </option>
                           <option data-value="623f0b8a24ddd115d6bd40ac" value="almuqbel" data-name="job_company_name" data-select2-id="101">Almuqbel </option>
                           <option data-value="623f0b8a24ddd115d6bd40ae" value="travel agency" data-name="job_company_name" data-select2-id="102">Travel Agency </option>
                           <option data-value="623f0b8a24ddd115d6bd40af" value="kabul" data-name="job_company_name" data-select2-id="103">Kabul </option>
                           <option data-value="623f0b8a24ddd115d6bd40b0" value="aes" data-name="job_company_name" data-select2-id="104">Aes </option>
                           <option data-value="623f0b8a24ddd115d6bd40b1" value="shirzadltd" data-name="job_company_name" data-select2-id="105">Shirzadltd </option>
                           <option data-value="623f0b8a24ddd115d6bd40b2" value="helmandwall" data-name="job_company_name" data-select2-id="106">Helmandwall </option>
                           <option data-value="623f0b8a24ddd115d6bd40b4" value="bma" data-name="job_company_name" data-select2-id="107">Bma </option>
                           <option data-value="623f0b8a24ddd115d6bd40b5" value="ministry of education, kabul afghanistan" data-name="job_company_name" data-select2-id="108">Ministry Of Education, Kabul Afghanistan </option>
                           <option data-value="623f0b8a24ddd115d6bd40b6" value="unep" data-name="job_company_name" data-select2-id="109">Unep </option>
                           <option data-value="623f0b8a24ddd115d6bd40b8" value="kabu creative" data-name="job_company_name" data-select2-id="110">Kabu Creative </option>
                           <option data-value="623f0b8a24ddd115d6bd40b9" value="radio reconnaissance technologies, inc. (rrt)" data-name="job_company_name" data-select2-id="111">Radio Reconnaissance Technologies, Inc. (rrt) </option>
                           <option data-value="623f0b8a24ddd115d6bd40ba" value="afghan realsoft" data-name="job_company_name" data-select2-id="112">Afghan Realsoft </option>
                           <option data-value="623f0b8a24ddd115d6bd40bc" value="csx corp" data-name="job_company_name" data-select2-id="113">Csx Corp </option>
                           <option data-value="623f0b8a24ddd115d6bd40be" value="aul" data-name="job_company_name" data-select2-id="114">Aul </option>
                           <option data-value="623f0b8a24ddd115d6bd40c0" value="se la come" data-name="job_company_name" data-select2-id="115">Se La Come </option>
                           <option data-value="623f0b8a24ddd115d6bd40c1" value="humanitarian assistance and development associations for afghanistan" data-name="job_company_name" data-select2-id="116">Humanitarian Assistance And Development Associations For Afghanistan </option>
                           <option data-value="623f0b8a24ddd115d6bd40c2" value="nsdp/world bank/molsamd" data-name="job_company_name" data-select2-id="117">Nsdp/world Bank/molsamd </option>
                           <option data-value="623f0b8a24ddd115d6bd40c3" value="caci international inc" data-name="job_company_name" data-select2-id="118">Caci International Inc </option>
                           <option data-value="623f0b8a24ddd115d6bd40c4" value="national malaria control porgramm" data-name="job_company_name" data-select2-id="119">National Malaria Control Porgramm </option>
                           <option data-value="623f0b8a24ddd115d6bd40c5" value="mtn" data-name="job_company_name" data-select2-id="120">Mtn </option>
                           <option data-value="623f0b8a24ddd115d6bd40c6" value="electro movers construction company" data-name="job_company_name" data-select2-id="121">Electro Movers Construction Company </option>
                           <option data-value="623f0b8a24ddd115d6bd40c7" value="dj freight" data-name="job_company_name" data-select2-id="122">Dj Freight </option>
                           <option data-value="623f0b8a24ddd115d6bd40ca" value="lb aluminium berhad" data-name="job_company_name" data-select2-id="123">Lb Aluminium Berhad </option>
                           <option data-value="623f0b8a24ddd115d6bd40cb" value="akbari" data-name="job_company_name" data-select2-id="124">Akbari </option>
                           <option data-value="623f0b8a24ddd115d6bd40cd" value="sahrai agrochemicals" data-name="job_company_name" data-select2-id="125">Sahrai Agrochemicals </option>
                           <option data-value="623f0b8a24ddd115d6bd40ce" value="asem construction company" data-name="job_company_name" data-select2-id="126">Asem Construction Company </option>
                           <option data-value="623f0b8a24ddd115d6bd40d0" value="microcis" data-name="job_company_name" data-select2-id="127">Microcis </option>
                           <option data-value="623f0b8a24ddd115d6bd40d1" value="badakhshan universty" data-name="job_company_name" data-select2-id="128">Badakhshan Universty </option>
                           <option data-value="623f0b8a24ddd115d6bd40d2" value="brown-forman" data-name="job_company_name" data-select2-id="129">Brown-forman </option>
                           <option data-value="623f0b8a24ddd115d6bd40d4" value="usaid tetra tech ard" data-name="job_company_name" data-select2-id="130">Usaid Tetra Tech Ard </option>
                           <option data-value="623f0b8a24ddd115d6bd40d6" value="move one inc." data-name="job_company_name" data-select2-id="131">Move One Inc. </option>
                           <option data-value="623f0b8a24ddd115d6bd40d7" value="ukrainian cossacks horse show" data-name="job_company_name" data-select2-id="132">Ukrainian Cossacks Horse Show </option>
                           <option data-value="623f0b8a24ddd115d6bd40da" value="afghanistan" data-name="job_company_name" data-select2-id="133">Afghanistan </option>
                           <option data-value="623f0b8a24ddd115d6bd40db" value="highlands" data-name="job_company_name" data-select2-id="134">Highlands </option>
                           <option data-value="623f0b8a24ddd115d6bd40dd" value="prodtec" data-name="job_company_name" data-select2-id="135">Prodtec </option>
                           <option data-value="623f0b8a24ddd115d6bd40de" value="afghanistan" data-name="job_company_name" data-select2-id="136">Afghanistan </option>
                           <option data-value="623f0b8a24ddd115d6bd40df" value="freelance" data-name="job_company_name" data-select2-id="137">Freelance </option>
                           <option data-value="623f0b8a24ddd115d6bd40e0" value="national statistics and information authority" data-name="job_company_name" data-select2-id="138">National Statistics And Information Authority </option>
                           <option data-value="623f0b8a24ddd115d6bd40e4" value="postfinance ltd" data-name="job_company_name" data-select2-id="139">Postfinance Ltd </option>
                           <option data-value="623f0b8a24ddd115d6bd40e5" value="afghan-american chamber of commerce (aacc)" data-name="job_company_name" data-select2-id="140">Afghan-american Chamber Of Commerce (aacc) </option>
                           <option data-value="623f0b8a24ddd115d6bd40e9" value="kromberg&amp;schubert romania" data-name="job_company_name" data-select2-id="141">Kromberg&amp;schubert Romania </option>
                        </select>
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <input type="hidden" id="filter-data1" placeholder="search"  value="" name="fname" autocomplete="off">
                     </ul>
                  </li>
               </div>
               <div class="accordion-item border-0" >
                  <li class="nav-item dropdown" style="list-style: none;">
                     <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Company HQ location
                        <select id="answers2" class="js-states form-control answ1 filter-slct-scont select2-hidden-accessible" multiple="" autocomplete="off" data-select2-id="answers2" tabindex="-1" aria-hidden="true">
                           <option data-value="623f0b8a24ddd115d6bd4026" value="bombay, maharashtra, india" data-select2-id="29">Bombay, Maharashtra, India</option>
                           <option data-value="623f0b8a24ddd115d6bd402e" value="alexandria, virginia, united states" data-select2-id="30">Alexandria, Virginia, United States</option>
                           <option data-value="623f0b8a24ddd115d6bd4033" value="united kingdom" data-select2-id="31">United Kingdom</option>
                           <option data-value="623f0b8a24ddd115d6bd4035" value="mclean, virginia, united states" data-select2-id="32">Mclean, Virginia, United States</option>
                           <option data-value="623f0b8a24ddd115d6bd4036" value="bethesda, maryland, united states" data-select2-id="33">Bethesda, Maryland, United States</option>
                           <option data-value="623f0b8a24ddd115d6bd4038" value="new delhi, delhi, india" data-select2-id="34">New Delhi, Delhi, India</option>
                           <option data-value="623f0b8a24ddd115d6bd403f" value="yokohama, kanagawa, japan" data-select2-id="35">Yokohama, Kanagawa, Japan</option>
                           <option data-value="623f0b8a24ddd115d6bd4041" value="colombia" data-select2-id="36">Colombia</option>
                           <option data-value="623f0b8a24ddd115d6bd4042" value="manila, manila, philippines" data-select2-id="37">Manila, Manila, Philippines</option>
                           <option data-value="623f0b8a24ddd115d6bd4043" value="dubai, united arab emirates" data-select2-id="38">Dubai, United Arab Emirates</option>
                           <option data-value="623f0b8a24ddd115d6bd4044" value="mobile, alabama, united states" data-select2-id="39">Mobile, Alabama, United States</option>
                           <option data-value="623f0b8a24ddd115d6bd4045" value="reston, virginia, united states" data-select2-id="40">Reston, Virginia, United States</option>
                           <option data-value="623f0b8a24ddd115d6bd4048" value="carrington, midlothian, united kingdom" data-select2-id="41">Carrington, Midlothian, United Kingdom</option>
                           <option data-value="623f0b8a24ddd115d6bd404f" value="utrecht, utrecht, netherlands" data-select2-id="42">Utrecht, Utrecht, Netherlands</option>
                           <option data-value="623f0b8a24ddd115d6bd4055" value="afghanistan" data-select2-id="43">Afghanistan</option>
                           <option data-value="623f0b8a24ddd115d6bd4056" value="dubai, dubai, united arab emirates" data-select2-id="44">Dubai, Dubai, United Arab Emirates</option>
                           <option data-value="623f0b8a24ddd115d6bd405f" value="kabul, kabul, afghanistan" data-select2-id="45">Kabul, Kabul, Afghanistan</option>
                           <option data-value="623f0b8a24ddd115d6bd4067" value="wetteren, oost-vlaanderen, belgium" data-select2-id="46">Wetteren, Oost-vlaanderen, Belgium</option>
                           <option data-value="623f0b8a24ddd115d6bd406c" value="geneva, geneva, switzerland" data-select2-id="47">Geneva, Geneva, Switzerland</option>
                           <option data-value="623f0b8a24ddd115d6bd406d" value="madrid, madrid, spain" data-select2-id="48">Madrid, Madrid, Spain</option>
                           <option data-value="623f0b8a24ddd115d6bd4075" value="fond du lac, wisconsin, united states" data-select2-id="49">Fond Du Lac, Wisconsin, United States</option>
                           <option data-value="623f0b8a24ddd115d6bd407f" value="washington, district of columbia, united states" data-select2-id="50">Washington, District Of Columbia, United States</option>
                           <option data-value="623f0b8a24ddd115d6bd4084" value="united states" data-select2-id="51">United States</option>
                           <option data-value="623f0b8a24ddd115d6bd4089" value="redmond, washington, united states" data-select2-id="52">Redmond, Washington, United States</option>
                           <option data-value="623f0b8a24ddd115d6bd4090" value="kabul, afghanistan" data-select2-id="53">Kabul, Afghanistan</option>
                           <option data-value="623f0b8a24ddd115d6bd4092" value="cupertino, california, united states" data-select2-id="54">Cupertino, California, United States</option>
                           <option data-value="623f0b8a24ddd115d6bd40a3" value="singapore, singapore" data-select2-id="55">Singapore, Singapore</option>
                           <option data-value="623f0b8a24ddd115d6bd40a6" value="cedar rapids, iowa, united states" data-select2-id="56">Cedar Rapids, Iowa, United States</option>
                           <option data-value="623f0b8a24ddd115d6bd40aa" value="new york, new york, united states" data-select2-id="57">New York, New York, United States</option>
                           <option data-value="623f0b8a24ddd115d6bd40ae" value="london, greater london, united kingdom" data-select2-id="58">London, Greater London, United Kingdom</option>
                           <option data-value="623f0b8a24ddd115d6bd40b6" value="nairobi, nairobi area, kenya" data-select2-id="59">Nairobi, Nairobi Area, Kenya</option>
                           <option data-value="623f0b8a24ddd115d6bd40b9" value="fredericksburg, virginia, united states" data-select2-id="60">Fredericksburg, Virginia, United States</option>
                           <option data-value="623f0b8a24ddd115d6bd40bc" value="cheyenne, wyoming, united states" data-select2-id="61">Cheyenne, Wyoming, United States</option>
                           <option data-value="623f0b8a24ddd115d6bd40c3" value="arlington, virginia, united states" data-select2-id="62">Arlington, Virginia, United States</option>
                           <option data-value="623f0b8a24ddd115d6bd40c7" value="australia" data-select2-id="63">Australia</option>
                           <option data-value="623f0b8a24ddd115d6bd40ca" value="beranang, selangor, malaysia" data-select2-id="64">Beranang, Selangor, Malaysia</option>
                           <option data-value="623f0b8a24ddd115d6bd40d2" value="louisville, kentucky, united states" data-select2-id="65">Louisville, Kentucky, United States</option>
                           <option data-value="623f0b8a24ddd115d6bd40db" value="atlanta, georgia, united states" data-select2-id="66">Atlanta, Georgia, United States</option>
                           <option data-value="623f0b8a24ddd115d6bd40df" value="summerland, british columbia, canada" data-select2-id="67">Summerland, British Columbia, Canada</option>
                           <option data-value="623f0b8a24ddd115d6bd40e4" value="bern, switzerland" data-select2-id="68">Bern, Switzerland</option>
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
                        <select id="answers3" class="js-states form-control answ1 select2-hidden-accessible" multiple="" autocomplete="off" data-select2-id="answers3" tabindex="-1" aria-hidden="true">
                           <option data-value="623f0b8a24ddd115d6bd4026" value="information technology and services">Information Technology And Services</option>
                           <option data-value="623f0b8a24ddd115d6bd402e" value="non-profit organization management">Non-profit Organization Management</option>
                           <option data-value="623f0b8a24ddd115d6bd4035" value="security and investigations">Security And Investigations</option>
                           <option data-value="623f0b8a24ddd115d6bd4036" value="international trade and development">International Trade And Development</option>
                           <option data-value="623f0b8a24ddd115d6bd4038" value="real estate">Real Estate</option>
                           <option data-value="623f0b8a24ddd115d6bd403b" value="banking">Banking</option>
                           <option data-value="623f0b8a24ddd115d6bd403f" value="design">Design</option>
                           <option data-value="623f0b8a24ddd115d6bd4041" value="leisure, travel &amp; tourism">Leisure, Travel &amp; Tourism</option>
                           <option data-value="623f0b8a24ddd115d6bd4044" value="marketing and advertising">Marketing And Advertising</option>
                           <option data-value="623f0b8a24ddd115d6bd405a" value="retail">Retail</option>
                           <option data-value="623f0b8a24ddd115d6bd4067" value="individual &amp; family services">Individual &amp; Family Services</option>
                           <option data-value="623f0b8a24ddd115d6bd4069" value="recreational facilities and services">Recreational Facilities And Services</option>
                           <option data-value="623f0b8a24ddd115d6bd406d" value="hospitality">Hospitality</option>
                           <option data-value="623f0b8a24ddd115d6bd4075" value="staffing and recruiting">Staffing And Recruiting</option>
                           <option data-value="623f0b8a24ddd115d6bd407f" value="defense &amp; space">Defense &amp; Space</option>
                           <option data-value="623f0b8a24ddd115d6bd4084" value="consumer goods">Consumer Goods</option>
                           <option data-value="623f0b8a24ddd115d6bd4089" value="computer software">Computer Software</option>
                           <option data-value="623f0b8a24ddd115d6bd4090" value="government administration">Government Administration</option>
                           <option data-value="623f0b8a24ddd115d6bd4091" value="information services">Information Services</option>
                           <option data-value="623f0b8a24ddd115d6bd4092" value="consumer electronics">Consumer Electronics</option>
                           <option data-value="623f0b8a24ddd115d6bd4097" value="renewables &amp; environment">Renewables &amp; Environment</option>
                           <option data-value="623f0b8a24ddd115d6bd40a3" value="transportation/trucking/railroad">Transportation/trucking/railroad</option>
                           <option data-value="623f0b8a24ddd115d6bd40a6" value="aviation &amp; aerospace">Aviation &amp; Aerospace</option>
                           <option data-value="623f0b8a24ddd115d6bd40aa" value="international affairs">International Affairs</option>
                           <option data-value="623f0b8a24ddd115d6bd40ae" value="airlines/aviation">Airlines/aviation</option>
                           <option data-value="623f0b8a24ddd115d6bd40b4" value="civic &amp; social organization">Civic &amp; Social Organization</option>
                           <option data-value="623f0b8a24ddd115d6bd40b5" value="education management">Education Management</option>
                           <option data-value="623f0b8a24ddd115d6bd40b8" value="online media">Online Media</option>
                           <option data-value="623f0b8a24ddd115d6bd40bc" value="internet">Internet</option>
                           <option data-value="623f0b8a24ddd115d6bd40be" value="higher education">Higher Education</option>
                           <option data-value="623f0b8a24ddd115d6bd40ca" value="oil &amp; energy">Oil &amp; Energy</option>
                           <option data-value="623f0b8a24ddd115d6bd40d2" value="wine and spirits">Wine And Spirits</option>
                           <option data-value="623f0b8a24ddd115d6bd40d6" value="logistics and supply chain">Logistics And Supply Chain</option>
                           <option data-value="623f0b8a24ddd115d6bd40df" value="arts and crafts">Arts And Crafts</option>
                           <option data-value="623f0b8a24ddd115d6bd40e4" value="financial services">Financial Services</option>
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
                        <select id="answers4" class="js-states form-control answ1 select2-hidden-accessible" multiple="" autocomplete="off" data-select2-id="answers4" tabindex="-1" aria-hidden="true">
                           <option data-value="623f0b8a24ddd115d6bd4026" value="10001+">10001+</option>
                           <option data-value="623f0b8a24ddd115d6bd402e" value="51-200">51-200</option>
                           <option data-value="623f0b8a24ddd115d6bd4033" value="11-50">11-50</option>
                           <option data-value="623f0b8a24ddd115d6bd4035" value="1001-5000">1001-5000</option>
                           <option data-value="623f0b8a24ddd115d6bd4036" value="5001-10000">5001-10000</option>
                           <option data-value="623f0b8a24ddd115d6bd4038" value="201-500">201-500</option>
                           <option data-value="623f0b8a24ddd115d6bd403f" value="1-10">1-10</option>
                           <option data-value="623f0b8a24ddd115d6bd40af" value="501-1000">501-1000</option>
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
                        <select id="answers5" class="js-states form-control answ1 select2-hidden-accessible" multiple="" autocomplete="off" data-select2-id="answers5" tabindex="-1" aria-hidden="true">
                           <option data-value="623f0b8a24ddd115d6bd4026" value="1968">1968</option>
                           <option data-value="623f0b8a24ddd115d6bd402e" value="1929">1929</option>
                           <option data-value="623f0b8a24ddd115d6bd4036" value="1970">1970</option>
                           <option data-value="623f0b8a24ddd115d6bd403b" value="1969">1969</option>
                           <option data-value="623f0b8a24ddd115d6bd403f" value="2000">2000</option>
                           <option data-value="623f0b8a24ddd115d6bd4042" value="2003">2003</option>
                           <option data-value="623f0b8a24ddd115d6bd4044" value="2004">2004</option>
                           <option data-value="623f0b8a24ddd115d6bd4045" value="2013">2013</option>
                           <option data-value="623f0b8a24ddd115d6bd404f" value="1996">1996</option>
                           <option data-value="623f0b8a24ddd115d6bd405a" value="1930">1930</option>
                           <option data-value="623f0b8a24ddd115d6bd406c" value="1863">1863</option>
                           <option data-value="623f0b8a24ddd115d6bd406d" value="1978">1978</option>
                           <option data-value="623f0b8a24ddd115d6bd407f" value="1981">1981</option>
                           <option data-value="623f0b8a24ddd115d6bd4089" value="1975">1975</option>
                           <option data-value="623f0b8a24ddd115d6bd4090" value="2014">2014</option>
                           <option data-value="623f0b8a24ddd115d6bd4091" value="1988">1988</option>
                           <option data-value="623f0b8a24ddd115d6bd4092" value="1976">1976</option>
                           <option data-value="623f0b8a24ddd115d6bd40a3" value="1848">1848</option>
                           <option data-value="623f0b8a24ddd115d6bd40a5" value="1944">1944</option>
                           <option data-value="623f0b8a24ddd115d6bd40a6" value="1933">1933</option>
                           <option data-value="623f0b8a24ddd115d6bd40aa" value="1974">1974</option>
                           <option data-value="623f0b8a24ddd115d6bd40b6" value="1972">1972</option>
                           <option data-value="623f0b8a24ddd115d6bd40b9" value="1997">1997</option>
                           <option data-value="623f0b8a24ddd115d6bd40c3" value="1962">1962</option>
                           <option data-value="623f0b8a24ddd115d6bd40d0" value="2011">2011</option>
                           <option data-value="623f0b8a24ddd115d6bd40d2" value="1870">1870</option>
                           <option data-value="623f0b8a24ddd115d6bd40d6" value="1992">1992</option>
                           <option data-value="623f0b8a24ddd115d6bd40df" value="2009">2009</option>
                           <option data-value="623f0b8a24ddd115d6bd40e4" value="1906">1906</option>
                        </select>
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <input type="hidden" id="filter-data5" placeholder="search"  value="" name="fname" autocomplete="off">
                     </ul>
                  </li>
               </div>
               <div class="accordion-item border-0">
                  <button class="accordion-button collapsed border-0 d-grid" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                     <h5> PEOPLE</h5>
                  </button>
               </div>
               <div class="accordion-item border-0" >
                  <li class="nav-item dropdown" style="list-style: none;">
                     <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Contact Name
                        <select id="answers6" class="js-states form-control answ1 select2-hidden-accessible" multiple="" autocomplete="off" data-select2-id="answers6" tabindex="-1" aria-hidden="true">
                            <option data-value="48768747854678" value="tom jack">Tom jack</option>
                            <option data-value="48768747854678" value="a jack halls">A jack halls</option>
                            <option data-value="48768747854678" value="a isaiah jackson">A isaiah jackson</option>
                            <option data-value="48768747854678" value="aaliyah jackson">Aaliyah jackson</option>
                            <option data-value="48768747854678" value="aaron altom">Aaron altom</option>
                            <option data-value="48768747854678" value="aalim jackson">Aalim jackson</option>
                            <option data-value="48768747854678" value="aaron bonda">Aaron bonda</option>
                            <option data-value="48768747854678" value="aaron goitom">Aaron goitom</option>
                            <option data-value="48768747854678" value="agnes tomorrow">Agnes tomorrow</option>
                            <option data-value="48768747854678" value="amanda furmanski">Amanda furmanski</option>
                        </select>
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
                        <select id="answers7" class="js-states form-control answ1 select2-hidden-accessible" multiple="" autocomplete="off" data-select2-id="answers7" tabindex="-1" aria-hidden="true">
                           <option data-value="623f0b8a24ddd115d6bd4026" value="india">India</option>
                           <option data-value="623f0b8a24ddd115d6bd402e" value="united states">United States</option>
                           <option data-value="623f0b8a24ddd115d6bd4033" value="united kingdom">United Kingdom</option>
                           <option data-value="623f0b8a24ddd115d6bd403f" value="japan">Japan</option>
                           <option data-value="623f0b8a24ddd115d6bd4041" value="colombia">Colombia</option>
                           <option data-value="623f0b8a24ddd115d6bd4042" value="philippines">Philippines</option>
                           <option data-value="623f0b8a24ddd115d6bd4043" value="united arab emirates">United Arab Emirates</option>
                           <option data-value="623f0b8a24ddd115d6bd404f" value="netherlands">Netherlands</option>
                           <option data-value="623f0b8a24ddd115d6bd4055" value="afghanistan">Afghanistan</option>
                           <option data-value="623f0b8a24ddd115d6bd4067" value="belgium">Belgium</option>
                           <option data-value="623f0b8a24ddd115d6bd406c" value="switzerland">Switzerland</option>
                           <option data-value="623f0b8a24ddd115d6bd406d" value="spain">Spain</option>
                           <option data-value="623f0b8a24ddd115d6bd40a3" value="singapore">Singapore</option>
                           <option data-value="623f0b8a24ddd115d6bd40b6" value="kenya">Kenya</option>
                           <option data-value="623f0b8a24ddd115d6bd40c7" value="australia">Australia</option>
                           <option data-value="623f0b8a24ddd115d6bd40ca" value="malaysia">Malaysia</option>
                           <option data-value="623f0b8a24ddd115d6bd40df" value="canada">Canada</option>
                        </select>
                        <input type="hidden" id="filter-data7" placeholder="search"  value="" name="fname" autocomplete="off">
                     </a>
                  </li>
               </div>
               <div class="accordion-item border-0" >
                  <li class="nav-item dropdown" style="list-style: none;">
                     <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Department
                        <select id="answers8" class="js-states form-control answ1 select2-hidden-accessible" multiple="" autocomplete="off" data-select2-id="answers8" tabindex="-1" aria-hidden="true">
                           <option data-value="623f0b8a24ddd115d6bd4026" value="engineering">Engineering</option>
                           <option data-value="623f0b8a24ddd115d6bd4032" value="human_resources">Human_resources</option>
                           <option data-value="623f0b8a24ddd115d6bd4038" value="sales">Sales</option>
                           <option data-value="623f0b8a24ddd115d6bd403e" value="health">Health</option>
                           <option data-value="623f0b8a24ddd115d6bd403f" value="design">Design</option>
                           <option data-value="623f0b8a24ddd115d6bd404e" value="finance">Finance</option>
                           <option data-value="623f0b8a24ddd115d6bd4056" value="marketing">Marketing</option>
                           <option data-value="623f0b8a24ddd115d6bd405b" value="education">Education</option>
                           <option data-value="623f0b8a24ddd115d6bd405e" value="operations">Operations</option>
                           <option data-value="623f0b8a24ddd115d6bd406c" value="public_relations">Public_relations</option>
                           <option data-value="623f0b8a24ddd115d6bd408c" value="media">Media</option>
                           <option data-value="623f0b8a24ddd115d6bd40c3" value="customer_service">Customer_service</option>
                        </select>
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
                        <select id="answers9" class="js-states form-control answ1 select2-hidden-accessible" multiple="" autocomplete="off" data-select2-id="answers9" tabindex="-1" aria-hidden="true">
                           <option data-value="623f0b8a24ddd115d6bd4026" value="engineering">Engineering</option>
                           <option data-value="623f0b8a24ddd115d6bd4032" value="human_resources">Human_resources</option>
                           <option data-value="623f0b8a24ddd115d6bd4038" value="sales">Sales</option>
                           <option data-value="623f0b8a24ddd115d6bd403e" value="health">Health</option>
                           <option data-value="623f0b8a24ddd115d6bd403f" value="design">Design</option>
                           <option data-value="623f0b8a24ddd115d6bd404e" value="finance">Finance</option>
                           <option data-value="623f0b8a24ddd115d6bd4056" value="marketing">Marketing</option>
                           <option data-value="623f0b8a24ddd115d6bd405b" value="education">Education</option>
                           <option data-value="623f0b8a24ddd115d6bd405e" value="operations">Operations</option>
                           <option data-value="623f0b8a24ddd115d6bd406c" value="public_relations">Public_relations</option>
                           <option data-value="623f0b8a24ddd115d6bd408c" value="media">Media</option>
                           <option data-value="623f0b8a24ddd115d6bd40c3" value="customer_service">Customer_service</option>
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
                        <select id="answers10" class="js-states form-control answ1 select2-hidden-accessible" multiple="" autocomplete="off" data-select2-id="answers10" tabindex="-1" aria-hidden="true">
                           <option data-value="623f0b8a24ddd115d6bd4026" value="education programme manager">Education Programme Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd4028" value="corespondant">Corespondant</option>
                           <option data-value="623f0b8a24ddd115d6bd4029" value="takhar center">Takhar Center</option>
                           <option data-value="623f0b8a24ddd115d6bd402b" value="chief executive officer of dclc">Chief Executive Officer Of Dclc</option>
                           <option data-value="623f0b8a24ddd115d6bd402c" value="manigar">Manigar</option>
                           <option data-value="623f0b8a24ddd115d6bd402d" value="studn">Studn</option>
                           <option data-value="623f0b8a24ddd115d6bd402e" value="u s army">U S Army</option>
                           <option data-value="623f0b8a24ddd115d6bd402f" value="general manager for budget">General Manager For Budget</option>
                           <option data-value="623f0b8a24ddd115d6bd4032" value="human resources manager">Human Resources Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd4033" value="circus juggler">Circus Juggler</option>
                           <option data-value="623f0b8a24ddd115d6bd4035" value="contractor">Contractor</option>
                           <option data-value="623f0b8a24ddd115d6bd4036" value="acting human resource manager">Acting Human Resource Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd4038" value="key account manager">Key Account Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd403b" value="senior internal auditor">Senior Internal Auditor</option>
                           <option data-value="623f0b8a24ddd115d6bd403d" value="atlanta police academy">Atlanta Police Academy</option>
                           <option data-value="623f0b8a24ddd115d6bd403e" value="medical doctor">Medical Doctor</option>
                           <option data-value="623f0b8a24ddd115d6bd403f" value="senior designer">Senior Designer</option>
                           <option data-value="623f0b8a24ddd115d6bd4041" value="director receptivo">Director Receptivo</option>
                           <option data-value="623f0b8a24ddd115d6bd4042" value="software developer">Software Developer</option>
                           <option data-value="623f0b8a24ddd115d6bd4043" value="contract manager">Contract Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd4044" value="president">President</option>
                           <option data-value="623f0b8a24ddd115d6bd4045" value="field service representative">Field Service Representative</option>
                           <option data-value="623f0b8a24ddd115d6bd4048" value="human resources officer">Human Resources Officer</option>
                           <option data-value="623f0b8a24ddd115d6bd404a" value="computer works and administrator works">Computer Works And Administrator Works</option>
                           <option data-value="623f0b8a24ddd115d6bd404e" value="chief financial officer">Chief Financial Officer</option>
                           <option data-value="623f0b8a24ddd115d6bd404f" value="cm">Cm</option>
                           <option data-value="623f0b8a24ddd115d6bd4050" value="human resources director">Human Resources Director</option>
                           <option data-value="623f0b8a24ddd115d6bd4051" value="graphic designer">Graphic Designer</option>
                           <option data-value="623f0b8a24ddd115d6bd4052" value="deputy chief executive officer">Deputy Chief Executive Officer</option>
                           <option data-value="623f0b8a24ddd115d6bd4053" value="joint managing director">Joint Managing Director</option>
                           <option data-value="623f0b8a24ddd115d6bd4054" value="export and industrial manager">Export And Industrial Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd4055" value="external relations officer">External Relations Officer</option>
                           <option data-value="623f0b8a24ddd115d6bd4056" value="digital marketing manager">Digital Marketing Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd4058" value="regional member">Regional Member</option>
                           <option data-value="623f0b8a24ddd115d6bd405a" value="it office">It Office</option>
                           <option data-value="623f0b8a24ddd115d6bd405b" value="teacher">Teacher</option>
                           <option data-value="623f0b8a24ddd115d6bd405d" value="head">Head</option>
                           <option data-value="623f0b8a24ddd115d6bd405e" value="business owner">Business Owner</option>
                           <option data-value="623f0b8a24ddd115d6bd405f" value="segment manager">Segment Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd4060" value="i am on th job">I Am On Th Job</option>
                           <option data-value="623f0b8a24ddd115d6bd4061" value="programs coordination director">Programs Coordination Director</option>
                           <option data-value="623f0b8a24ddd115d6bd4062" value="administrator officer">Administrator Officer</option>
                           <option data-value="623f0b8a24ddd115d6bd4063" value="manager of institute">Manager Of Institute</option>
                           <option data-value="623f0b8a24ddd115d6bd4064" value="tourist officer">Tourist Officer</option>
                           <option data-value="623f0b8a24ddd115d6bd4066" value="private">Private</option>
                           <option data-value="623f0b8a24ddd115d6bd4067" value="intern">Intern</option>
                           <option data-value="623f0b8a24ddd115d6bd4069" value="hygien officer">Hygien Officer</option>
                           <option data-value="623f0b8a24ddd115d6bd406a" value="general manager">General Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd406b" value="ansari high school, kabul">Ansari High School, Kabul</option>
                           <option data-value="623f0b8a24ddd115d6bd406c" value="public relation officer">Public Relation Officer</option>
                           <option data-value="623f0b8a24ddd115d6bd406d" value="aruwas co">Aruwas Co</option>
                           <option data-value="623f0b8a24ddd115d6bd406f" value="vendedor">Vendedor</option>
                           <option data-value="623f0b8a24ddd115d6bd4072" value="training coordinator">Training Coordinator</option>
                           <option data-value="623f0b8a24ddd115d6bd4073" value="senior enrollment officer">Senior Enrollment Officer</option>
                           <option data-value="623f0b8a24ddd115d6bd4075" value="military">Military</option>
                           <option data-value="623f0b8a24ddd115d6bd4077" value="training officer">Training Officer</option>
                           <option data-value="623f0b8a24ddd115d6bd4079" value="working in a logistic company">Working In A Logistic Company</option>
                           <option data-value="623f0b8a24ddd115d6bd407b" value="gis manager">Gis Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd407c" value="national project manager">National Project Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd407f" value="finance officer">Finance Officer</option>
                           <option data-value="623f0b8a24ddd115d6bd4082" value="finanace manager">Finanace Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd4083" value="ota nurse in hospital">Ota Nurse In Hospital</option>
                           <option data-value="623f0b8a24ddd115d6bd4084" value="engineer, photogrammetric">Engineer, Photogrammetric</option>
                           <option data-value="623f0b8a24ddd115d6bd4085" value="engineer">Engineer</option>
                           <option data-value="623f0b8a24ddd115d6bd4086" value="corretor and professor">Corretor And Professor</option>
                           <option data-value="623f0b8a24ddd115d6bd4088" value="doosm">Doosm</option>
                           <option data-value="623f0b8a24ddd115d6bd4089" value="administrative assistant">Administrative Assistant</option>
                           <option data-value="623f0b8a24ddd115d6bd408a" value="senior manager-construction">Senior Manager-construction</option>
                           <option data-value="623f0b8a24ddd115d6bd408b" value="administrator and finance officer">Administrator And Finance Officer</option>
                           <option data-value="623f0b8a24ddd115d6bd408c" value="editor in chief">Editor In Chief</option>
                           <option data-value="623f0b8a24ddd115d6bd408d" value="commercial manager">Commercial Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd408e" value="project manager">Project Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd4090" value="administrative officer">Administrative Officer</option>
                           <option data-value="623f0b8a24ddd115d6bd4091" value="officer">Officer</option>
                           <option data-value="623f0b8a24ddd115d6bd4092" value="eraq">Eraq</option>
                           <option data-value="623f0b8a24ddd115d6bd4093" value="it officer">It Officer</option>
                           <option data-value="623f0b8a24ddd115d6bd4095" value="diplomat">Diplomat</option>
                           <option data-value="623f0b8a24ddd115d6bd4096" value="army officer">Army Officer</option>
                           <option data-value="623f0b8a24ddd115d6bd4097" value="renawable energy engineer">Renawable Energy Engineer</option>
                           <option data-value="623f0b8a24ddd115d6bd409b" value="sales and marketing">Sales And Marketing</option>
                           <option data-value="623f0b8a24ddd115d6bd409d" value="salesman">Salesman</option>
                           <option data-value="623f0b8a24ddd115d6bd409f" value="senior capacity building manager">Senior Capacity Building Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd40a0" value="principal">Principal</option>
                           <option data-value="623f0b8a24ddd115d6bd40a2" value="english instructor">English Instructor</option>
                           <option data-value="623f0b8a24ddd115d6bd40a3" value="office incharge">Office Incharge</option>
                           <option data-value="623f0b8a24ddd115d6bd40a4" value="provincal technical specialist">Provincal Technical Specialist</option>
                           <option data-value="623f0b8a24ddd115d6bd40a5" value="internal audit consultant">Internal Audit Consultant</option>
                           <option data-value="623f0b8a24ddd115d6bd40a6" value="library circulation technician">Library Circulation Technician</option>
                           <option data-value="623f0b8a24ddd115d6bd40aa" value="it manager">It Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd40ac" value="porfession">Porfession</option>
                           <option data-value="623f0b8a24ddd115d6bd40ae" value="owner of asia express">Owner Of Asia Express</option>
                           <option data-value="623f0b8a24ddd115d6bd40af" value="facility officer">Facility Officer</option>
                           <option data-value="623f0b8a24ddd115d6bd40b0" value="civil engineer">Civil Engineer</option>
                           <option data-value="623f0b8a24ddd115d6bd40b1" value="buisness">Buisness</option>
                           <option data-value="623f0b8a24ddd115d6bd40b2" value="poultry farmer">Poultry Farmer</option>
                           <option data-value="623f0b8a24ddd115d6bd40b5" value="senio human resources specialist">Senio Human Resources Specialist</option>
                           <option data-value="623f0b8a24ddd115d6bd40b6" value="field operation assistant">Field Operation Assistant</option>
                           <option data-value="623f0b8a24ddd115d6bd40b7" value="administrator and finance">Administrator And Finance</option>
                           <option data-value="623f0b8a24ddd115d6bd40b9" value="electronics technician">Electronics Technician</option>
                           <option data-value="623f0b8a24ddd115d6bd40ba" value="finance manager">Finance Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd40bc" value="activities concierge">Activities Concierge</option>
                           <option data-value="623f0b8a24ddd115d6bd40be" value="construction engineer">Construction Engineer</option>
                           <option data-value="623f0b8a24ddd115d6bd40c0" value="qu ete importe">Qu Ete Importe</option>
                           <option data-value="623f0b8a24ddd115d6bd40c1" value="program coordinator">Program Coordinator</option>
                           <option data-value="623f0b8a24ddd115d6bd40c2" value="senior procurement specialist and head of nsdp procurement">Senior Procurement Specialist And Head Of Nsdp Procurement</option>
                           <option data-value="623f0b8a24ddd115d6bd40c3" value="counterintelligence support specialist">Counterintelligence Support Specialist</option>
                           <option data-value="623f0b8a24ddd115d6bd40c4" value="medical laboratory">Medical Laboratory</option>
                           <option data-value="623f0b8a24ddd115d6bd40c5" value="computer opreater">Computer Opreater</option>
                           <option data-value="623f0b8a24ddd115d6bd40c6" value="director">Director</option>
                           <option data-value="623f0b8a24ddd115d6bd40c7" value="responsable de la gerencia comercial">Responsable De La Gerencia Comercial</option>
                           <option data-value="623f0b8a24ddd115d6bd40cb" value="rostam">Rostam</option>
                           <option data-value="623f0b8a24ddd115d6bd40ce" value="administrator finance manager">Administrator Finance Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd40cf" value="conservator">Conservator</option>
                           <option data-value="623f0b8a24ddd115d6bd40d0" value="chief executive officer">Chief Executive Officer</option>
                           <option data-value="623f0b8a24ddd115d6bd40d1" value="asistant professor">Asistant Professor</option>
                           <option data-value="623f0b8a24ddd115d6bd40d2" value="saddle stitcher operator">Saddle Stitcher Operator</option>
                           <option data-value="623f0b8a24ddd115d6bd40d3" value="5">5</option>
                           <option data-value="623f0b8a24ddd115d6bd40d4" value="teamleader and planning advisor">Teamleader And Planning Advisor</option>
                           <option data-value="623f0b8a24ddd115d6bd40d6" value="manager">Manager</option>
                           <option data-value="623f0b8a24ddd115d6bd40d7" value="freeman">Freeman</option>
                           <option data-value="623f0b8a24ddd115d6bd40d9" value="Ø Ø Ù Ø">Ø Ø Ù Ø</option>
                           <option data-value="623f0b8a24ddd115d6bd40da" value="sayed esmail balkhi">Sayed Esmail Balkhi</option>
                           <option data-value="623f0b8a24ddd115d6bd40dd" value="jefe de planta">Jefe De Planta</option>
                           <option data-value="623f0b8a24ddd115d6bd40de" value="kateb">Kateb</option>
                           <option data-value="623f0b8a24ddd115d6bd40df" value="it">It</option>
                           <option data-value="623f0b8a24ddd115d6bd40e0" value="systems development specialist">Systems Development Specialist</option>
                           <option data-value="623f0b8a24ddd115d6bd40e4" value="it security">It Security</option>
                           <option data-value="623f0b8a24ddd115d6bd40e5" value="computer teacher">Computer Teacher</option>
                           <option data-value="623f0b8a24ddd115d6bd40e7" value="master student in china">Master Student In China</option>
                           <option data-value="623f0b8a24ddd115d6bd40e9" value="sef birou achizitii">Sef Birou Achizitii</option>
                           <option data-value="623f0b8a24ddd115d6bd40eb" value="battalion s-1 officer-in-charge">Battalion S-1 Officer-in-charge</option>
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
                  <!-- People List Here -->
                  <?php if(count($people_list) >= 1) { ?>
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
                        <?php foreach($people_list as $people){
                           //Check company name is exit or not in array
                           if($people['full_name'] != null){ ?>
                        <tr>
                           <td>
                              <p><strong>
                                 <?php if(isset($people['full_name'])) { 
                                    echo $people['full_name']; 
                                    } 
                                    ?>
                                 </strong>
                              </p>
                              <p>
                           </td>
                           <td>
                              <p>
                                 <?php if(isset($people['work_email'])) { 
                                    echo "Work Email: ".$people['work_email']; 
                                    } 
                                    ?>
                              </p>
                              <p>
                                 <?php if(isset($people['phone_numbers'])) {
                                    foreach($people['phone_numbers'] as $phone){
                                        echo "Phone: ".$phone."</br>"; 
                                    }
                                    } 
                                    ?>
                              </p>
                              <p>
                                 <?php if(isset($people['emails'])) { 
                                    foreach($people['emails'] as $email){
                                        echo "Email: ".$email['address']."</br>"; 
                                    }
                                    } 
                                    ?>
                              </p>
                           </td>
                           <td>
                              <p><strong>
                                 <?php if(isset($people['job_company_name'])){ 
                                    $string = $people['job_company_name'];
                                    $string = (strlen($string) > 20)?substr($string,0,19).'...' : $string;
                                    echo $string;
                                    } ?>
                                 </strong>
                              </p>
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
                  <?php } ?>
               </div>
               <div role="tabpanel" class="tab-pane" id="Companies">
                  <div id="showresults"></div>
                  <!-- Company List here -->
                  <?php if(count($company_list) >= 1) { ?>
                  <table id="company_list2" class="table table-striped table-bordered" style="width:100%">
                     <thead>
                        <tr>
                           <th class="prospective_company_head">Company</th>
                           <th class="prospective_company_head">Details</th>
                           <th class="prospective_company_head">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach($company_list as $company){ 
                           //check if job_company_name is null
                           if($company['job_company_name'] != null){ ?>
                        <tr>
                           <td>
                              <p><strong>
                                 <?php if(isset($company['job_company_name'])) { 
                                    $string2 = $company['job_company_name'];
                                    $string2 = (strlen($string2) > 20)?substr($string2,0,19).'...' : $string2;
                                    echo $string2;
                                    } 
                                    ?>
                                 </strong>
                              </p>
                           </td>
                           <td>
                              <p>
                                 <?php if(isset($company['work_email'])) { 
                                    echo "Work Email: ".$company['work_email']; 
                                    } 
                                    ?>
                              </p>
                              <p>
                                 <?php if(isset($company['phone_numbers'])) {
                                    foreach($company['phone_numbers'] as $phone){
                                        echo "Phone: ".$phone."</br>"; 
                                    }
                                    } 
                                    ?>
                              </p>
                              <p>
                                 <?php if(isset($company['emails'])) { 
                                    foreach($company['emails'] as $email){
                                        echo "Email: ".$email['address']."</br>"; 
                                    }
                                    } 
                                    ?>
                              </p>
                           </td>
                           <td class="procpective-detail-button"> 
                              <button class="btn app-btn-primary  float-end show_company_detail" data-company_id="<?php echo $company['_id']; ?>" data-company_name="<?php echo $company['job_company_name']; ?>" data-contact_name="<?php echo $company['full_name']; ?>" data-work_email="<?php if(isset($company['emails'][0]['address'])) { echo $company['emails'][0]['address']; } ?>" data-phone_number="<?php if(isset($company['phone_numbers'][0])) { echo $company['phone_numbers'][0]; } ?>">Show Details</button>
                           </td>
                        </tr>
                        <?php } } ?>
                     </tbody>
                  </table>
                  <?php
                     $com_page = !empty($_REQUEST['page'])?$_REQUEST['page']:1;
                     $com_next = $com_page+1;
                     $com_prev = ($com_page == 1)?1:$com_page-1;
                     ?>
                  <div class="buttonlink">
                     <a href="{{url('prospecting?page='.$com_prev)}}" class="previous">Previous</a>
                     <a href="{{url('prospecting?page='.$com_next)}}" class="next">Next</a>
                  </div>
                  <?php } ?>
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
         </div>
         <br>
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
                           </select>
                           <br>
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