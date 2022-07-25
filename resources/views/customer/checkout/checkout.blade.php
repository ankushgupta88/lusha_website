@extends('layouts.master')

@section('content')
<?php
$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
 ?>
<section class="app checkout"> 
 <div class="container">
       <div class="row">
          <div class="col-md-7">
            <div class="payment-content py-4 py-md-5">
              <h6 class="fw-bold mb-3"> Payment method </h6>
                <div class="select_payment position-relative">
                  <input type="radio" name="payment_methods" id="stripe" value="Stripe" checked>  <img src="{{url('public/assets/images/stripe-img.png')}}" alt="Image"/ class="img-fluid">
                </div>

            <form role="form" class="require-validation" data-cc-on-file="false" id="paymentform">
           <!--Payment method-->
            @foreach($plan_data as $payment_plan)
             <div class="payment-blk border p-4 my-4">
                 <input type="hidden" name="payment_method" value="Stripe">
                   <!-- stripe payment method -->
                  <div class="stripe_select">
                     <div class="form-group mb-3 ">
                        <label for="exampleInputcredit" class="pb-2"><i class="fa fa-credit-card" aria-hidden="true"></i> <small> Credit card details </small> </label>
                        <input type="text" autocomplete='off' name="card_number" class="form-control card-number"  maxlength="16" onkeypress="return onlyNumber(event)">
                     </div>
                     <div class="row">
                      <div class="form-group mb-3 col-4 ">
                        <label for="expmonth" class="pb-2"><i class="fa fa-calendar" aria-hidden="true"></i><small> Exp Month </small></label>
                          <input type="text" name="card_month"class="form-control card-expiry-month"  placeholder="MM" maxlength="2" onkeypress="return onlyNumber(event)">
                       </div>
                      <div class="form-group mb-3 col-4 ">
                         <label for="expyear" class="pb-2"> <i class="fa fa-yelp" aria-hidden="true"></i> <small> Exp Year </small></label>
                         <input type="text" name="card_exp_year" class="form-control card-expiry-year"  placeholder="YYYY" maxlength="4" onkeypress="return onlyNumber(event)">
                       </div>
                        <div class="form-group mb-3 col-4 ">
                             <label for="cvv" class="pb-2"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> <small> CVV </small></label>
                              <input type="text" name="card_cvv" autocomplete="off" class="form-control card-cvc"  placeholder="cvv" maxlength="4" onkeypress="return onlyNumber(event)">
                        </div>
                        <p class="stripe-error py-3 text-danger"></p>
                     </div>
                     <div class="form-group ">
                        <label for="exampleInputcardholder" class="pb-2"> <i class="fa fa-user-o" aria-hidden="true"></i> <small> Cardholder name </small> </label>
                        <input type="text" name="cardholder_name" class="form-control card-expiry-year"  placeholder="">
                     </div>
                  </div>
                       <h6 class="fw-bold mt-4 mb-3"> Billing details </h6>
                     <div class="form-group mb-3">
                        <label for="exampleInputcredit" class="pb-2"> <i class="fa fa-building-o" aria-hidden="true"></i> <small> Company name </small> </label>
                        <input type="text" name="company_name" class="form-control card-expiry-year" placeholder="">
                     </div>
                     <div class="form-group mb-3">
                        <label for="exampleInputbillingemail" class="pb-2"> <i class="fa fa-envelope-o" aria-hidden="true"></i> <small> Billing email</small></label>
                        <input type="email" name="email" class="form-control" id="exampleInputBillingemail"  placeholder="">
                      </div>
                     <div class="form-group mb-3 ">
                        <label for="exampleInputcardholder" class="pb-2"> <i class="fa fa-address-card-o" aria-hidden="true"></i> <small> Billing address </small> </label>
                        <input type="text" name="address" class="form-control card-expiry-year"  placeholder="">
                     </div>
                      <div class="row mb-1 ">
                        <div class="form-group mb-3 col-xl-6">
                          <label for="exampleInputcardcity" class="pb-2"> <i class="fa fa-map-marker" aria-hidden="true"></i> <small> City </small> </label>
                          <input type="text" name="city" class="form-control card-expiry-year"  placeholder="">
                        </div> 
                         <div class="form-group mb-3 col-xl-6 ">
                          <label for="exampleInputcardcode" class="pb-2"> <i class="fa fa-file-archive-o" aria-hidden="true"></i> <small> Zip code </small> </label>
                          <input type="text" name="postal_code" class="form-control card-expiry-year"  placeholder="">
                        </div>
                     </div>
                      <div class="form-group ">
                         <label for="exampleInputcountry" class="pb-2"> <i class="fa fa-globe" aria-hidden="true"></i> <small> Country </small> </label>
                        <select class="form-select" name="country" aria-label="Default select example">
                        <?php foreach ($countries as $country) { ?>
                          <option value="{{$country}}">{{$country}}</option>
                        <?php } ?>
                        </select>
                       </div>
             </div>
               <!--Billing details-->
          </div>
        </div>
        <div class="col-md-5">
            <div class="plan-content p-4 border my-md-5 my-0" id="stripe_amount">
             <!--block 1-->
              <div class="professional-plan-blk d-flex justify-content-between mb-3">
                <div class="plan-name-blk">
                    <h6 class="fw-bold"> Annual Professional plan </h6>
                    <small>{{$payment_plan->credits}}, {{$payment_plan->plan_type}}</small>
                </div>  
                <div class="payment-blk">
                    <?php
                      $annual_plan = ($payment_plan->actual_price*12);
                    ?>
                    <h6 class="fw-bold">$<?php echo number_format($annual_plan,2); ?></h6>
                </div>
              </div>
              <div class="excellent-choice-text p-3 rounded-4"><small><strong> Excellent choice! </strong> Annual billing gave {{$payment_plan->discount}}% off and {{$payment_plan->credits}} upfront</small> </div>
                <div class="total-payment-blk py-4 px-1 border-top mt-4">
                  <ul class="list-unstyled ps-0 mb-0">
                      <li class="d-flex justify-content-between"> <h6 class="mb-0"> {{$payment_plan->discount}}% Annual discount </h6> 
                      <?php
                        $discount = ($annual_plan/100*$payment_plan->discount);
                       ?>
                      <span class="product-price"> -$<?php echo number_format($discount,2); ?> </span> </li>  
                      <li class="py-3 main-clr"> Have a promo code? </li>
                      <li class="d-flex justify-content-between fw-bold border-top pt-4"> <h6 class="mb-0"> Total (charged today) </h6> 
                      <?php $total_price = ($annual_plan-$discount); ?>
                      <span class="product-price"> $<?php echo number_format($total_price,2); ?> </span> </li> 
                      <input type="hidden" name="amount" value="{{$total_price}}">
                      <input type="hidden" name="plan_id" value="{{$payment_plan->id}}"> 
                      <input type="hidden" name="plan_name" value="{{$payment_plan->plan_name}}">
                      <?php
                        foreach ($current_plan as $current_credit) {
                          $available_credit = $current_credit['credits'];
                        }
                       ?>
                      <?php $credit = preg_replace('/\D/', '', $payment_plan->credits);
                            $all_credit = ($credit+$available_credit);
                       ?>
                      <input type="hidden" name="credit" value="{{$all_credit}}">
                  </ul>
                </div>
                <input type="hidden" name="stipe_payment_btn" value="1">
               <button class="btn main-btn w-100" type="submit" id="submit_btn">Confirm payment</button>
               <div class="payment_responce"></div><div class="payment_loding"></div><br>
               <small> Your payment will be annually auto-renewed (unless cancelled before next renewal date) </small> <br>
               <small> All amounts shown are in $ USD </small>
            </div>
        </div>
      </form>
     </div>
    @endforeach

 </div>


<!-- <script type="text/javascript" src="https://js.stripe.com/v2/"></script> -->
<script>
    function onlyNumber(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)){
                return false;
            }
        return true;
    }
</script>

</section>

@endsection





