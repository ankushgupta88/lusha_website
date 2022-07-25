@extends('layouts.after-login-master')

@section('content')

<section class="app"> 
 <div class="container-fluid">
     <div class="row">
        <div class="col-md-2 side-content shadow">
            @include('layouts.sidebar')
        </div>
          <div class="col-md-9">
            <div class="content-main">
              <div class="app-content p-md-5 pt-5">
                  <div class="row align-items-center">
                    <div class="col-md-12">
                       <div class="content-title pb-5">
                           <h5 class="app-page-title mb-0"> Account </h5>
                       </div>
                    </div>
             @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
                    <div class="col-md-12">
                        <div class="tab-content-blk">
                        <div class="account-tab-detail">
                          

                            <button class="tablinks btn active" onclick="openCity(event, 'profile')">My profile</button>
                            <button class="tablinks btn" onclick="openCity(event, 'Subscription')">Subscription</button>
                            <button class="tablinks btn" onclick="openCity(event, 'Billing')">Billing</button>
                            <button class="tablinks btn" onclick="openCity(event, 'Account')">Account settings</button>


                        </div>
                      <!-- 1 -->
                      
                        <div id="profile" class="account p-4 my-4 border tabcontent">
                          <h6 class="fw-600 mb-0"> Personal Details </h6>
                          <form action="{{ url('account-update/'.$checkmyplan['userDetail']->id) }}" method="POST" class="pt-4 mb-0">
                        @csrf
                        @method('PUT')
                              <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{$checkmyplan['userDetail']->name}}">
                              </div>
                              <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="emailaddress" value="{{$checkmyplan['userDetail']->email}}" readonly>
                              </div>
                               <button type="submit" class="btn app-btn-primary mb-3 mt-1">Save Change</button>
                          </form>
                          
                            <br><small> Want to reset your password?  <br>
                               <a href="{{ url('account-reset-password/'.$checkmyplan['userDetail']->id) }}"> Send me reset instructions </a> </small>
                          
                               
                            
                        </div>
                     
                      <!--2-->
                     
                        <div id="Subscription" class="account p-4 my-4 border tabcontent" style="display:none">
                          <h6 class="fw-600 mb-0"> Subscription </h6>
                           <div class="subscription-info pt-4"> 
                              <ul class="list-unstyled"> 
                              <li class="d-flex justify-content-between border-bottom mb-3"> <p class="mb-0"> Plan </p> <p class="mb-0">{{$checkmyplan['plandetail']['plan_name']}}</p> </li>
                              <li class="d-flex justify-content-between border-bottom mb-3"> <p class="mb-0"> Credits </p> <p class="mb-0"> {{$checkmyplan['plandetail']['credits']}}</p> </li>
                              <!--<li class="d-flex justify-content-between border-bottom mb-3"> <p class="mb-0"> Users </p> <p class="mb-0"> 1 </p> </li>-->
                       <li> <small> Your credits will be renewed on {{$plan_date}}. </small></li>
                              
                              </ul> 
                             <a href="{{url('/plans')}}" target="blank"><button type="submit" class="btn app-btn-primary mb-3 mt-1">
                              Change Plan</button></a> 
                           </div>
                        </div>
                    
                      <!-- 3 -->
                        <div id="Billing" class="account p-4 my-4 border tabcontent" style="display:none">
                          <h6 class="fw-600 mb-0"> Invoice History </h6>
                          <div class="billing-information pt-4">
                              <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">ID</th>
                                  <th scope="col">Date</th>
                                  <th scope="col">Amount</th>
                                </tr>
                              </thead>
                              <tbody>
                              @php($count = 0)
                                @foreach($checkmyplan['orderDetail'] as $invoice_history)
                                 @php($count++)
                                          <tr>
                                  <th scope="row">{{$count}}</th>
                                  <?php
                                    $payment_date = $invoice_history->created_at;
                                    $invoice_date = date('d - M,Y',strtotime($payment_date));
                                  ?>
                                  <td>{{$invoice_date}}</td>
                                  <td>{{$invoice_history->amount}}</td>
                                </tr>
                              @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>

                        <!-- 4 -->
                        <div id="Account" class="account my-4 tabcontent " style="display:none">
                          <div class="sign-Okta-content border  p-4">
                               <h6 class="fw-600 mb-4"> Single sign on </h6>
                            <div class="d-md-flex">  
                              <div class="okta-img"> <img src="{{url('public/assets/images/okta.png')}}" alt="Image"/> </div>
                              <div class="okta-content-body ps-md-3 pt-4 pt-md-0"> <h6 class="fw-bold"> Sign in with Okta </h6>
                                <p> Upgrade to the Enterprise plan so all users sign in using Okta SSO for added security. </p>
                                <button type="submit" class="btn app-btn-primary mb-3 mt-1">Contact Sales</button>
                              </div>
                             </div>
                          </div>
<?php
$countries = ['Austria','Belgium','Bulgaria','Cyprus','Czech Republic','Germany','Denmark','Estonia','Spain','Finland','France','United Kingdom','Greece','Hungary','Croatia','Ireland, Republic of (EIRE)','Italy','Lithuania','Luxembourg','Latvia','Malta','Netherlands','Poland','Portugal','Romania','Sweden','Slovenia','Slovakia',];
$Other_countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

 ?>                        

      <div class="privacy-content border  p-4 mt-4">
           <h6 class="fw-600 mb-4"> Privacy </h6>
          <p> Hide contacts from the following countries (when using the Prospecting Platform): </p>
           <form class="d-flex">
                <input class="form-control me-2 " type="search" id="search" autocomplete="off" placeholder="Search for countries..." />
                <button class="btn btn-primary-outline" type="submit">Search</button>
            </form>
          <div class="list"> 
            <h6><input class="form-check-input" type="checkbox"> All EU countries (27)</h6>
            <?php foreach ($countries as $country) { ?>
              <h6><input class="form-check-input country_check" type="checkbox" name="<?= $country ?>" value="<?= $country ?>"> <?= $country ?><h6>
            <?php } ?>
            
            <div class="form-check pt-4">
                <h6> Other countries (222)</h6>
            <?php foreach ($Other_countries as $other_country) { ?>
            <h6><input class="form-check-input country_check" type="checkbox" name="<?= $other_country ?>" value="<?= $other_country ?>"> <?= $other_country ?><h6>
            <?php } ?>
            </div>
          </div>
               
      </div>
    <div class="answer pt-3 text-center">
       <label for="coupon_field" id="check_count"></label>
       <div class="save-selection-btn pt-3">
         <button  id="clear" class="btn btn-primary-outline py-1">Clear</button>  
         <button  id="hidden" class="btn app-btn-primary ms-2">Save Selection</button>
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
 </div>
</section>
@endsection



