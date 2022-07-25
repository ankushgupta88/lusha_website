@include('layouts.head')

<?php
$api_secret = env('API_SECRET'); 
       $api_url = env('API_URL'); 

        $url =  $api_url.''."fetchAll";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);

        $data = array(
            "api_secret" => $api_secret,
            "page" => 1,
            "limit" => 10,
            "order" => "ASC",
            "hasMore"=> true,

        );
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $contents = curl_exec($ch);
        $company_list = json_decode($contents);
        
?>
<link href="https://cdn.jsdelivr.net/npm/tom-select@2.0.0-rc.4/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.0.0-rc.4/dist/js/tom-select.complete.min.js"></script>
<body>
 <div id="app">

    <!--header section-->
     <header class="dashboard_header customer-header">
         <div class="header header2 bg-clr">
             <div class="container-fluid">
                 <div class="row align-items-lg-center py-2">
                     <div class="col-lg-2 col-6">
                         <div class="logo-block mb-3 mb-md-0">
                              <!--<a class="navbar-brand" href="{{ url('/') }}"> {{ config('app.name', 'LUSHA') }} </a>-->
                       <h3 id="thing_to_click" style="cursor: pointer;">Site.</h3>
                         </div>
                     </div>
                     <div class="col-lg-10 col-12">
                      <div class="nav-content">
                         <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                  <ul class="navbar-nav w-100">
                                    @if(!empty(Auth::user()))
                                     <li class="nav-item" style="margin-right: 40px;">
      
<div  class="header-search-bar d-flex">
    <div class="icon p-2">
        <i class="fa fa-search text-white" aria-hidden="true"></i>
    </div>
    <div class="search">
        <select id="select-state" placeholder="Search for companies">
           <option data-value="4556ds4cv54fd4v5tr45dg" value="amazon"><a href="#here" >Amazon</a></option>
            <option data-value="623f0b8a24ddd115d6bd4026" value="tata consultancy services"><a href="#here" >Tata Consultancy Services </a></option>
            <option data-value="623f0b8a24ddd115d6bd4028" value="d-w"><a href="#here" >D-w </a></option>
            <option data-value="623f0b8a24ddd115d6bd4029" value="takhar ttc"><a href="#here" >Takhar Ttc </a></option>
            <option data-value="623f0b8a24ddd115d6bd402b" value="dost construction &amp; logistic company"><a href="#here" >Dost Construction &amp; Logistic Company</a> </option>
            <option data-value="623f0b8a24ddd115d6bd402c" value="roshan qadri construction company"><a href="#here" >Roshan Qadri Construction Company</a></option>
            <option data-value="623f0b8a24ddd115d6bd402e" value="military officers association of america (moaa)"><a href="#here" >Military Officers Association Of America (moaa)</a> </option> 
            <option data-value="623f0b8a24ddd115d6bd4032" value="goverment development projects"><a href="#here" >Goverment Development Projects </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4033" value="mmcc consultants"><a href="#here" >Mmcc Consultants </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4035" value="gardaworld federal services"><a href="#here" >Gardaworld Federal Services </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4036" value="dai"><a href="#here" >Dai </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4038" value="magicbricks realty services limited"><a href="#here" >Magicbricks Realty Services Limited </a> </option>
            <option data-value="623f0b8a24ddd115d6bd403b" value="afghanistan central bank (da afghanistan bank - dab)"><a href="#here" >Afghanistan Central Bank (da Afghanistan Bank - Dab) </a> </option>
            <option data-value="623f0b8a24ddd115d6bd403f" value="ps design"><a href="#here" >Ps Design </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4041" value="global mercado del turismo"><a href="#here" >Global Mercado Del Turismo </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4042" value="seer technologies, inc."><a href="#here" >Seer Technologies, Inc. </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4043" value="no lemon int'l fze"><a href="#here" >No Lemon Int'l Fze </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4044" value="hummingbird ideas"><a href="#here" >Hummingbird Ideas </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4045" value="saic"><a href="#here" >Saic </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4047" value="albadar hospital"><a href="#here" >Albadar Hospital </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4048" value="edinburgh international"><a href="#here" >Edinburgh International </a> </option>
            <option data-value="623f0b8a24ddd115d6bd404a" value="every companies"><a href="#here" >Every Companies </a> </option>
            <option data-value="623f0b8a24ddd115d6bd404e" value="zncc"><a href="#here" >Zncc </a> </option>
            <option data-value="623f0b8a24ddd115d6bd404f" value="wcc"><a href="#here" >Wcc </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4050" value="ministry of commerce &amp; industries"><a href="#here" >Ministry Of Commerce &amp; Industries </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4052" value="dawioil"><a href="#here" >Dawioil </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4053" value="owais enterprise"><a href="#here" >Owais Enterprise </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4054" value="nangarhar chamber of commerce &amp; industries"><a href="#here" >Nangarhar Chamber Of Commerce &amp; Industries </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4055" value="independent election commission"><a href="#here" >Independent Election Commission </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4056" value="lapis communications"><a href="#here" >Lapis Communications </a> </option>
            <option data-value="623f0b8a24ddd115d6bd405a" value="al-futtaim"><a href="#here" >Al-futtaim </a> </option>
            <option data-value="623f0b8a24ddd115d6bd405b" value="ansari high school"><a href="#here" >Ansari High School </a> </option>
            <option data-value="623f0b8a24ddd115d6bd405d" value="statistics and information analysis unit"><a href="#here" >Statistics And Information Analysis Unit </a> </option>
            <option data-value="623f0b8a24ddd115d6bd405f" value="afghanistan international bank"><a href="#here" >Afghanistan International Bank </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4060" value="hntpo"><a href="#here" >Hntpo </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4061" value="iarcsc"><a href="#here" >Iarcsc </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4063" value="cai"><a href="#here" >Cai </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4066" value="private"><a href="#here" >Private </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4067" value="shamshad"><a href="#here" >Shamshad </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4069" value="mrrd"><a href="#here" >Mrrd </a> </option>
            <option data-value="623f0b8a24ddd115d6bd406a" value="work force organization"><a href="#here" >Work Force Organization </a> </option>
            <option data-value="623f0b8a24ddd115d6bd406c" value="international committee of the red cross - icrc"><a href="#here" >International Committee Of The Red Cross - Icrc </a> </option>
            <option data-value="623f0b8a24ddd115d6bd406d" value="nh hotel group"><a href="#here" >Nh Hotel Group </a> </option>
            <option data-value="623f0b8a24ddd115d6bd406f" value="wyh importados"><a href="#here" >Wyh Importados </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4075" value="amry astro group, inc."><a href="#here" >Amry Astro Group, Inc. </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4077" value="building markets international"><a href="#here" >Building Markets International </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4078" value="peasaran haji baba company"><a href="#here" >Peasaran Haji Baba Company </a> </option>
            <option data-value="623f0b8a24ddd115d6bd407a" value="afghan morvarid stone mining company"><a href="#here" >Afghan Morvarid Stone Mining Company </a> </option>
            <option data-value="623f0b8a24ddd115d6bd407b" value="ministry of urban development and housing afghanistan"><a href="#here" >Ministry Of Urban Development And Housing Afghanistan </a> </option>
            <option data-value="623f0b8a24ddd115d6bd407c" value="fao-un afghanistan"><a href="#here" >Fao-un Afghanistan </a> </option>
            <option data-value="623f0b8a24ddd115d6bd407f" value="ronco consulting corporation"><a href="#here" >Ronco Consulting Corporation </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4082" value="private ompany"><a href="#here" >Private Ompany </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4084" value="the dial corporation"><a href="#here" >The Dial Corporation </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4086" value="alliança home life seduc"><a href="#here" >Alliança Home Life Seduc </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4089" value="microsoft"><a href="#here" >Microsoft </a> </option>
            <option data-value="623f0b8a24ddd115d6bd408a" value="thyssenkrupp industrial solutions india"><a href="#here" >Thyssenkrupp Industrial Solutions India </a> </option>
            <option data-value="623f0b8a24ddd115d6bd408b" value="brac" >Brac </a> </option>
            <option data-value="623f0b8a24ddd115d6bd408c" value="ministry of information"><a href="#here" >Ministry Of Information </a> </option>
            <option data-value="623f0b8a24ddd115d6bd408d" value="mazar sbu-auwssc"><a href="#here" >Mazar Sbu-auwssc </a> </option>
            <option data-value="623f0b8a24ddd115d6bd408e" value="mujtaba ali hamza trading company"><a href="#here" >Mujtaba Ali Hamza Trading Company </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4090" value="national procurement authority (npa)"><a href="#here" >National Procurement Authority (npa) </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4091" value="!mikro computer consulting"><a href="#here" >!mikro Computer Consulting </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4092" value="apple"><a href="#here" >Apple </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4093" value="brishna noor"><a href="#here" >Brishna Noor </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4095" value="ministry of foreign affairs afghanistan"><a href="#here" >Ministry Of Foreign Affairs Afghanistan </a> </option>
            <option data-value="623f0b8a24ddd115d6bd4097" value="sustainable energy services afghanistan (sesa)"><a href="#here" >Sustainable Energy Services Afghanistan (sesa) </a> </option>
            <option data-value="623f0b8a24ddd115d6bd409b" value="wco flooring america"><a href="#here" >Wco Flooring America </a> </option>
            <option data-value="623f0b8a24ddd115d6bd409d" value="first own"><a href="#here" >First Own </a> </option>
            <option data-value="623f0b8a24ddd115d6bd409f" value="iternational rescue committee"><a href="#here" >Iternational Rescue Committee </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40a0" value="hirschfeld consulting services"><a href="#here" >Hirschfeld Consulting Services </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40a2" value="nice.insititute"><a href="#here" >Nice.insititute </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40a3" value="apl"><a href="#here" >Apl </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40a4" value="undp idlg"><a href="#here" >Undp Idlg </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40a5" value="the world bank"><a href="#here" >The World Bank </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40a6" value="rockwell collins"><a href="#here" >Rockwell Collins </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40a7" value="afghanistan"><a href="#here" >Afghanistan </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40a8" value="nosco consulting"><a href="#here" >Nosco Consulting </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40aa" value="undp"><a href="#here" >Undp </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40ac" value="almuqbel"><a href="#here" >Almuqbel </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40ae" value="travel agency"><a href="#here" >Travel Agency </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40af" value="kabul"><a href="#here" >Kabul </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40b0" value="aes"><a href="#here" >Aes </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40b1" value="shirzadltd"><a href="#here" >Shirzadltd </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40b2" value="helmandwall"><a href="#here" >Helmandwall </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40b4" value="bma"><a href="#here" >Bma </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40b5" value="ministry of education, kabul afghanistan"><a href="#here" >Ministry Of Education, Kabul Afghanistan </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40b6" value="unep"><a href="#here" >Unep </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40b8" value="kabu creative"><a href="#here" >Kabu Creative </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40b9" value="radio reconnaissance technologies, inc. (rrt)"><a href="#here" >Radio Reconnaissance Technologies, Inc. (rrt) </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40ba" value="afghan realsoft"><a href="#here" >Afghan Realsoft </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40bc" value="csx corp"><a href="#here" >Csx Corp </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40be" value="aul"><a href="#here" >Aul </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40c0" value="se la come"><a href="#here" >Se La Come </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40c1" value="humanitarian assistance and development associations for afghanistan"><a href="#here" >Humanitarian Assistance And Development Associations For Afghanistan </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40c2" value="nsdp/world bank/molsamd"><a href="#here" >Nsdp/world Bank/molsamd </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40c3" value="caci international inc"><a href="#here" >Caci International Inc </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40c4" value="national malaria control porgramm"><a href="#here" >National Malaria Control Porgramm </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40c5" value="mtn"><a href="#here" >Mtn </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40c6" value="electro movers construction company"><a href="#here" >Electro Movers Construction Company </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40c7" value="dj freight"><a href="#here" >Dj Freight </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40ca" value="lb aluminium berhad"><a href="#here" >Lb Aluminium Berhad </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40cb" value="akbari"><a href="#here" >Akbari </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40cd" value="sahrai agrochemicals"><a href="#here" >Sahrai Agrochemicals </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40ce" value="asem construction company"><a href="#here" >Asem Construction Company </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40d0" value="microcis"><a href="#here" >Microcis </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40d1" value="badakhshan universty"><a href="#here" >Badakhshan Universty </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40d2" value="brown-forman"><a href="#here" >Brown-forman </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40d4" value="usaid tetra tech ard"><a href="#here" >Usaid Tetra Tech Ard </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40d6" value="move one inc"><a href="#here" >Move One Inc. </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40d7" value="ukrainian cossacks horse show"><a href="#here" >Ukrainian Cossacks Horse Show </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40da" value="afghanistan"><a href="#here" >Afghanistan </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40db" value="highlands"><a href="#here" >Highlands </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40dd" value="prodtec"><a href="#here" >Prodtec </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40de" value="afghanistan"><a href="#here" >Afghanistan </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40df" value="freelance"><a href="#here" >Freelance </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40e0" value="national statistics and information authority"><a href="#here" >National Statistics And Information Authority </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40e4" value="postfinance ltd"><a href="#here" >Postfinance Ltd </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40e5" value="afghan-american chamber of commerce (aacc)"><a href="#here" >Afghan-american Chamber Of Commerce (aacc) </a> </option>
            <option data-value="623f0b8a24ddd115d6bd40e9" value="kromberg&amp;schubert romania"><a href="#here" >Kromberg&amp;schubert Romania </a> </option>
        </select>
    </div>
</div>
                                      </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="{{url('/plans')}}"><i class="fa fa-star pe-2" aria-hidden="true"></i>Upgrade</a>
                                      </li>
                              <li class="nav-item dropdown">
                                      <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{Auth::user()->name }}
                                      </a>
                                
                                      
                                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            @if(Auth::user()->user_type == 'Customer' || Auth::user()->user_type == 'Development'|| Auth::user()->user_type == 'Sales')
                                        <li><a class="dropdown-item" href="{{url('/labs')}}">{{ __('Labs') }}</a></li>
                                         <li><a class="dropdown-item" href="{{url('/account')}}">{{ __('Account') }}</a></li>
                                          <li><a class="dropdown-item" href="{{url('/join-community')}}">{{ __('Join Community') }}</a></li>
                                          <li><a class="dropdown-item" href="{{url('/support')}}">{{ __('Support') }}</a></li>
                                     @endif
                                     <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                      </ul>
                                    @else
                                    
                                          <li class="nav-item login_lst">
                                      <a class="nav-link" href="{{url('/login')}}">Login</a>
                                    </li>
                                    <li class="nav-item signup signup_lst">
                                      <a class="nav-link" href="{{url('/register')}}">Signup</a>
                                    </li>
                                    @endif
                                  </ul>
                                </div>
                            </nav> 
                      </div>
                     </div>
                    
                 </div>
             </div>
         </div>
     </header>



        <main>
            @yield('content')
        </main>
    </div>
 <!--footer content-->
  
   
   

<!-- data table script -->
<script src="{{ asset('public/assets/js/bootstrap/bootstrapv3.min.js') }}" defer></script>
<script src="{{ asset('public/assets/js/bootstrap/jquery.dataTables.min.js') }}" defer></script>
<script src="{{ asset('public/assets/js/footer-custom-script.js') }}" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$("#thing_to_click").on('click', function(){
     window.location = "{{ url('/') }}";    
});
</script>
<script>
$("document").ready(function(){
    setTimeout(function(){
        $(".alert-danger").remove();
        $(".alert-success").remove();
    }, 5000 );
});

    $("#select-state").change(function(){
        
    var options = document.getElementById('select-state').selectedOptions;
  var filter_name = Array.from(options).map(({ value }) => value);
       window.location.href = base_url+'/prospecting?job_company_name='+filter_name
     
     
       
      
     });
  new TomSelect("#select-state",{
        create: false,
        sortField: {
            field: "text",
           // direction: "asc"
        }
    });
</script>
</body>
</html>
