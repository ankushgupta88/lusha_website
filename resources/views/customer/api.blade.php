@extends('layouts.after-login-master')

@section('content')

<section class="app"> 
 <div class="container-fluid">
     <div class="row">
        <div class="col-md-2 side-content">
            @include('layouts.sidebar')
        </div>
          <div class="col-md-9">
            <div class="content-main lusha-api-content ">
              <div class="app-content p-md-5 pt-4">
                  <div class="row align-items-center">
		            
                <div class="col-md-12">
                    <div class="lusha-api-image text-center mb-4 mb-md-5 pt-md-3">
                        <img src="{{url('public/assets/images/data-and-tools.png')}}" alt="Labs Image" class="img-fluid"/>
                        
                    </div>
                </div>
                 <div class="col-xl-7 col-lg-10 col-md-12 col-12 mx-auto mb-4">
                <div class="text-center p-0">
                  <div class="container bg-yellow p-4 p-md-5">
                    <div class="">
                         <h3 class="fw-bold">Enrich any system with EmailFinder’s B2B data</h3>
                        <p class="m-0">EmailFinder’s API makes it easy to automatically update any database, system or app with accurate B2B contact and company data.
                         Set up your API to enrich and regularly update the data to ensure that it stays relevant. </p>
                    </div>
                  </div>
                 </div>
                 </div>
               
                    <div class="col-xl-7 col-lg-10 col-md-12 col-12 mx-auto my-4">
                        <div class="api-keys-content border p-3 p-md-4">
                           <h6 class="fw-bold mb-0"> API Secret Keys </h6> 
                           <div class="api-table table-responsive pt-4">
                               <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">API Key</th>
                                  <th scope="col">Platform</th>
                                  <th scope="col">Created</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">f7622dbf-83df-42a7-84b5-38b5730d0b7f</th>
                                  <td>General API</td>
                                  <td>Dec 28th 2021</td>
                                </tr>
                                <tr>
                                  <th scope="row">99d7c406-9c62-4438-962e-6bb870663e1c</th>
                                  <td>Salesforce API</td>
                                  <td>Dec 28th 2021</td>
                                </tr>
                              </tbody>
                            </table>
                           </div>
                           <div class="see-documentation-text d-md-flex align-items-center justify-content-between">
                              <small class="py-2 py-md-0 d-block"> Your API key is private. Make sure you only share it with people you trust. </small> 
                              <button class="btn app-btn-primary"> See Documentation </button>
                           </div>
                        </div>
                    </div>
                  </div>
                    
                </div>
              </div>
            </div>
        </div>
     </div>
 </div>
</section>





@endsection
