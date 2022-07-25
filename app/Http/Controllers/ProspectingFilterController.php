<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\CusList;
use App\Models\UserPlan;
use App\Models\ProspectingList;
use App\Models\History;
use App\Models\SaveHistory;
use DB;
use Session;
class ProspectingFilterController extends Controller
{
   /*public function prospecting_filter($id)
    { 
        
        if($id) { ?>
        <script>
            $(document).ready(function() {
   
              var table = $('#example2').DataTable({ 
                    select: false,
                    "columnDefs": [{
                        className: "Name", 
                        "targets":[0],
                        "visible": false,
                        "searchable":false
                    }]
                });//End of create main table
            });
        </script>
       <table id="example2" class="display pt-4 mb-4" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th> </th>
                <th> </th>
                <th>Name</th>
                <th>Contacts</th>
                <th>company</th>
                <th>Action</th>
            </tr>
        </thead> 
        <tbody>
            <?php 
            $api_secret = env('API_SECRET'); 
           $api_url = env('API_URL'); 
        $url = $api_url.''."fetchSpecific";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);

        $data = array(
            "api_secret" => $api_secret,
            "row_id" => $id
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $contents = curl_exec($ch);
        $list_contact = json_decode($contents,true);
        curl_close($ch);
 // echo '<pre>'; print_r($list_contact); echo '</pre>';
 //           exit;
    if($list_contact){
    
            ?>
              <tr>
                <td><?php //echo $row['full_name']; ?></td>
                <td><input type="checkbox" class="filter_prospecting" name="check_detail"></td>
                <td><?php echo $list_contact['full_name'];?></td>
                <td><p><strong>Company Website:</strong> <?php echo $list_contact['job_company_website']; ?></p>
                    <p><strong> Company Facebook url :</strong> <?php echo $list_contact['job_company_facebook_url']; ?></p>
                    <p><strong>Company Twitter url :</strong><?php echo $list_contact['job_company_twitter_url']; ?></p>
                   <p><strong>Location:</strong> <?php echo $list_contact['job_company_location_name']; ?></p>
                    <p><strong>locality:</strong><?php echo $list_contact['job_company_location_locality']; ?></p>
                    <p><strong>Region:</strong><?php echo $list_contact['job_company_location_region']; ?></p>
                    <p><strong>Country:</strong><?php echo $list_contact['job_company_location_country']; ?></p>
                    <p> <strong>Location Name:</strong><?php echo $list_contact['location_name']; ?></p>
                </td>
                <td><p><?php echo $list_contact['job_company_name']; ?></p></td>
                <td> <button class="btn app-btn-primary float-end" data-bs-toggle="modal" data-bs-target="#filtersaveModal">Show Details</button> </td>
              </tr>  
                <?php  } ?>
             <!-- end tag -->
            </tbody>
        </table>
        <?php
        }else{?>
            <h1>No Result Found !</h1> 
       <?php }
    }*/


    // prospecting insert data
    public function add_prospecting(Request $request)
    {
        $user_id = Auth::id();
        $user_credit = $request->credit;
        $user_contact = $request->list_contact;
        $list_id = $request->list_id;

        $create_prospecting = ProspectingList::create([
                    'list_id'    =>  $list_id,
                    'user_id' =>  $user_id,
                    'full_name' =>  $request->full_name,
                    'linkedin_url' =>  $request->linkedin_url,
                    'facebook_url' =>  $request->facebook_url,
                    'twitter_url' =>  $request->twitter_url,
                    'github_url' =>  $request->github_url,
                    'work_email' =>  $request->work_email,
                    'mobile_phone' =>  $request->mobile_phone,
                    'job_title' =>  $request->job_title,
                    'job_company_name' =>  $request->job_company_name,
                    'new_departments' =>  $request->departments
                ]);
        //check if plan is create
        if($create_prospecting){
            $user_id = Auth::id();
            $update_plan = UserPlan::where('user_id', $user_id)
                ->update([
                    'used_credits'    =>  $user_credit,
                ]); 
            $updat_contact = CusList::where('id', $list_id)
                ->update([
                    'list_contacts'    =>  $user_contact,
                ]);
        }

        return redirect()->back()->with('status','Save detail your list Successfully');

    }

    //Show prospecting data
    public function compainy_details(Request $request){
        //Get Request
        $company_id = $request->company_id;
        $company_name = $request->company_name;
        $contact_name = $request->contact_name;
        $work_email = $request->work_email;
        $phone_number = $request->phone_number;
        ?>
       <input type="hidden" name="full_name" value="<?php echo $contact_name; ?>">
       <input type="hidden" name="linkedin_url" value="">
       <input type="hidden" name="facebook_url" value="">
       <input type="hidden" name="twitter_url" value="">
       <input type="hidden" name="github_url" value="">
       <input type="hidden" name="work_email" value="<?php echo $work_email; ?>">
       <input type="hidden" name="mobile_phone" value="<?php echo $phone_number; ?>">
       <input type="hidden" name="job_title" value="">
       <input type="hidden" name="job_company_id" value=" <?php echo $company_id; ?>">
       <input type="hidden" name="job_company_name" value="<?php echo $company_name; ?>">
       <input type="hidden" name="departments" value="">
    <?php }
    
    public function prospecting_list($id){
         $prospect_list = ProspectingList::where('list_id', $id)->get();
        return view('customer.prospecting_list',compact('prospect_list'));
    }
   
    public function prospecting_lists(){
        $user_id = Auth::id();
         $prospect_list = ProspectingList::where('user_id', $user_id)->get();
        return view('customer.prospecting_list',compact('prospect_list'));
    }
    
    //Function for filters
    public function search_filter(Request $request){
        $page = !empty($request['page'])?$request['page']:1;
   
        $job_company_name =!empty($request->job_company_name)?$request->job_company_name:$request->all_filter;
        $job_company_location_name =!empty($request->job_company_location_name)?$request->job_company_location_name:$request->all_filter;
        $industry =!empty($request->job_company_industry)?$request->job_company_industry:$request->all_filter;
        $job_company_size =!empty($request->job_company_size)?$request->job_company_size:$request->all_filter;
        $job_company_founded =!empty($request->job_company_founded)?$request->job_company_founded:$request->all_filter;
        $contact_name =!empty($request->contact_name)?$request->contact_name:$request->all_filter;
        $job_company_location_country =!empty($request->job_company_location_country)?$request->job_company_location_country:$request->all_filter;
        $job_title_role =!empty($request->job_title_role)?$request->job_title_role:$request->all_filter;
        $seniority =!empty($request->seniority)?$request->seniority:$request->all_filter;
        $job_title =!empty($request->job_title)?$request->job_title:$request->all_filter;
        
        //Chck Filltrs
        $exclude = false;
        $filters = [];
        if(!empty($job_company_name) && $request->filter_type == "job_company_name"){
            //Check if job_company_name is exit or not
            if(count($job_company_name) >= 1){
                foreach($job_company_name as $company_name){
                    $job_company_name_input[] = $company_name;
                }
            }
            
            //Check include or exclude 
            $company_inc_exc =  $request->company_inc_exc;
            if($company_inc_exc == "1"){
                $exclude = true;
            }
            
            //Filters array for company search
            $filters = [
                    [
                        "name"=> "full_name",
                        "exclude"=> false,
                        "input"=> ["tom","jack"]
                    ],
                    [
                        "name"=> "job_company_name",
                        "exclude"=> $exclude,
                        "input"=> $job_company_name_input
                    ]
                ];
        }elseif(!empty($job_company_location_name)  && $request->filter_type == "job_company_location_name"){
            
            //Check include or exclude 
            $location_inc_exc =  $request->location_inc_exc;
            if($location_inc_exc == "1"){
                $exclude = true;
            }
            
            //Filters array for job_company_location_name
            $filters = [
                    [
                        "name"=> "full_name",
                        "exclude"=> false,
                        "input"=> ["tom","jack"]
                    ],
                    [
                        "name"=> "job_company_name",
                        "exclude"=> $exclude,
                        "input"=> ["amazon"]
                    ]
                ];
        }elseif(!empty($industry)  && $request->filter_type == "job_company_industry"){
            
            //Check include or exclude 
            $industry_inc_exc =  $request->industry_inc_exc;
            if($industry_inc_exc == "1"){
                $exclude = true;
            }
            
            //Filters array for job_company_industry
            $filters = [
                    [
                        "name"=> "full_name",
                        "exclude"=> false,
                        "input"=> ["tom","jack"]
                    ],
                    [
                        "name"=> "job_company_name",
                        "exclude"=> $exclude,
                        "input"=> ["amazon"]
                    ]
                ];
        }elseif(!empty($job_company_size)  && $request->filter_type == "job_company_size"){
            //Filters array for job_company_size
            $filters = [
                    [
                        "name"=> "full_name",
                        "exclude"=> false,
                        "input"=> ["tom","jack"]
                    ],
                    [
                        "name"=> "job_company_name",
                        "exclude"=> $exclude,
                        "input"=> ["amazon"]
                    ]
                ];
        }elseif(!empty($job_company_founded)  && $request->filter_type == "job_company_founded"){
           //Filters array for job_company_founded
            $filters = [
                    [
                        "name"=> "full_name",
                        "exclude"=> false,
                        "input"=> ["tom","jack"]
                    ],
                    [
                        "name"=> "job_company_name",
                        "exclude"=> $exclude,
                        "input"=> ["amazon"]
                    ]
                ];
        }elseif(!empty($contact_name)  && $request->filter_type == "contact_name" &&  $request->search_type == 1){
            //Get first value from array
            $contact_name_input_0 = $contact_name[0]; 
            //$contact_name_input = explode(" ",$contact_name_input_0);
            
            $parts = explode(" ", $contact_name_input_0);
            if(count($parts) > 1) {
                $lastname = array_pop($parts);
                $firstname = implode(" ", $parts);
            } else {
                $firstname = $contact_name_input_0;
                $lastname = " ";
            }
            
            //Filters array for contact name search
            $filters = [
                    [
                        "name"=> "full_name",
                        "exclude"=> false,
                        "input"=> [".$firstname.",".$lastname."]
                    ],
                    [
                        "name"=> "job_company_name",
                        "exclude"=> $exclude,
                        "input"=> ["amazon"]
                    ]
                ];
        }elseif(!empty($job_company_location_country)  && $request->filter_type == "job_company_location_country"){
            //Check include or exclude 
            $location_inc_exc =  $request->location_inc_exc;
            if($location_inc_exc == "1"){
                $exclude = true;
            }
            
            //Filters array for job_company_location_country
            $filters = [
                    [
                        "name"=> "full_name",
                        "exclude"=> false,
                        "input"=> ["tom","jack"]
                    ],
                    [
                        "name"=> "job_company_name",
                        "exclude"=> $exclude,
                        "input"=> ["amazon"]
                    ]
                ];
        }elseif(!empty($job_title_role)  && $request->filter_type == "job_title_role"){
           //Filters array for job_title_role
            $filters = [
                    [
                        "name"=> "full_name",
                        "exclude"=> false,
                        "input"=> ["tom","jack"]
                    ],
                    [
                        "name"=> "job_company_name",
                        "exclude"=> $exclude,
                        "input"=> ["amazon"]
                    ]
                ];
        }elseif(!empty($seniority)  && $request->filter_type == "seniority"){
           //Filters array for seniority
            $filters = [
                    [
                        "name"=> "full_name",
                        "exclude"=> false,
                        "input"=> ["tom","jack"]
                    ],
                    [
                        "name"=> "job_company_name",
                        "exclude"=> $exclude,
                        "input"=> ["amazon"]
                    ]
                ];
        }elseif(!empty($job_title)  && $request->filter_type == "job_title"){
            //Check include or exclude 
            $job_inc_exc =  $request->job_inc_exc;
            if($job_inc_exc == "1"){
                $exclude = true;
            }
            
            //Filters array for job_title
            $filters = [
                    [
                        "name"=> "full_name",
                        "exclude"=> false,
                        "input"=> ["tom","jack"]
                    ],
                    [
                        "name"=> "job_company_name",
                        "exclude"=> $exclude,
                        "input"=> ["amazon"]
                    ]
                ];
        }
       
       //print_r($contact_name_input); exit;
        //Call New Api Start Here
        $new_api_data = array(
                "page" => $page,
                "rows"=> 10,
                "has_email"=> true,
                "has_phone"=> true,
                "mask"=> true,
                 "fields"=> ["full_name","job_company_name","work_email","mobile_phone","phone_numbers","emails"],
                 "filters"=> $filters
            );
            
        $new_api_url  = env('API_URL').'getData';
        $new_api_data_array = json_encode( $new_api_data );
        $new_api_curl = curl_init();
        curl_setopt( $new_api_curl, CURLOPT_URL, $new_api_url );
        curl_setopt( $new_api_curl, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $new_api_curl, CURLOPT_POSTFIELDS, $new_api_data_array );
        curl_setopt( $new_api_curl, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) );
        $new_api_result = curl_exec($new_api_curl);
        $new_api_responce = json_decode( $new_api_result, true );
        curl_close( $new_api_curl );
        //Check iF responce is exit or not
        //echo "<pre>"; print_r( $new_api_responce ); echo "</pre>"; exit;
        
        $company_lists = [];
        if($new_api_responce['statusCode'] == 200){
            $company_lists = $new_api_responce['data'];
        }
        //Call New Api End Here
        
        
        //Get Current user History
        $checkUserhistory = History::where('user_id',Auth::id())->first();
        $filtertype = $request['history'];
        
        //Check if page is 1 or not
        if($page == 1){
            if(!empty($checkUserhistory)){
                foreach($filtertype as $key=>$value){
                    $deletehistory = History::where('user_id',Auth::id())->where('title',$value)->first();
                    if(!empty($deletehistory)){
                        $deletehistory->delete();
                    }
                    $history = new History();
                    $history->title = $value;
                    $history->user_id = Auth::id();
                    $history->filter_type = $request['filter_type'];
                    $history->filter_name = $request['name'];
                    $history->status = 1;
                    $history->save();
                }
            } else {
                foreach($filtertype as $key=>$value){
                    $deletehistory = History::where('user_id',Auth::id())->where('title',$value)->first();
                    if(!empty($deletehistory)){
                        $deletehistory->delete();
                    }
                    $history = new History();
                    $history->title = $value;
                    $history->user_id = Auth::id();
                    $history->status = 1;
                    $history->filter_type = $request['filter_type'];
                    $history->filter_name = $request['name'];
                    $history->save();
                }
            }
        }
        
        if(count($company_lists) >= 1) { ?>
            <script>
                $(document).ready(function() {
                    var table = $('#company_list3').DataTable();
                });
            </script>
            <script>
                $('#next').click(function(){
                    var next = $("#next").val()
                
                    $.ajax({
                        type: "GET",
                        url: base_url+'/search-single-company/',
                        data: {
                            page:next
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
            </script>
            <table id="company_list3" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th class="prospective_company_head">Company</th>
                        <th class="prospective_company_head">details</th>
                        <th class="prospective_company_head">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($company_lists as $company){ 
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
                        </strong></p>
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
                            <button class="btn app-btn-primary float-end show_company_detail" data-company_id="<?php echo $company['_id']; ?>" data-company_name="<?php echo $company['job_company_name']; ?>" data-contact_name="<?php echo $company['full_name']; ?>" data-work_email="<?php if(isset($company['emails'][0]['address'])) { echo $company['emails'][0]['address']; } ?>" data-phone_number="<?php if(isset($company['phone_numbers'][0])) { echo $company['phone_numbers'][0]; } ?>">Show Details</button>
                        </td>
                    </tr>
                    <?php } } ?>
                </tbody>
            </table>
            <?php
                $page = !empty($_REQUEST['page'])?$_REQUEST['page']:1;
                $next = $page+1;
                $prev = ($page == 1)?1:$page-1;
            ?>
            <div class="buttonlink">
                <a href="<?php echo url('prospecting?page='.$prev); ?>" class="previous">Previous</a>
                <a href="<?php echo url('prospecting?page='.$next); ?>" class="next">Next</a>
            </div> 
        <?php } else {
            echo "No Result Found. Please Try Again!";
        } 
    }
    
    
    public function SavedHistory(Request $request){

       $filterdata1 =  $request['filterdata1'][0];
       $job_title1 = str_replace($filterdata1, "job_company_name", $filterdata1);
       $f_key1 = str_replace("1", "job_company_name", $filterdata1);
      // print_r($f_key1); die;
        $filterdata2 =  $request['filterdata2'][0];
       $job_title2 = str_replace($filterdata2, "job_company_location_name", $filterdata2);
        $f_key2 = !empty($request['filterdata2'][0]?2:'');
        
        $filterdata3 =  $request['filterdata3'][0];
       $job_title3 = str_replace($filterdata3, "job_company_industry", $filterdata3);
       $f_key3 = !empty($request['filterdata3'][0]?3:'');
       
        $filterdata4 =  $request['filterdata4'][0];
       $job_title4 = str_replace($filterdata4, "job_company_size", $filterdata4);
       $f_key4 = !empty($request['filterdata4'][0]?4:'');
       
        $filterdata5 =  $request['filterdata5'][0];
       $job_title5 = str_replace($filterdata5, "job_company_founded", $filterdata5); 
              $f_key5 = !empty($request['filterdata5'][0]?5:'');

        $filterdata6 =  $request['filterdata6'][0];
       $job_title6 = str_replace($filterdata6, "job_title", $filterdata6);
              $f_key6 = !empty($request['filterdata6'][0]?6:'');

        $filterdata7 =  $request['filterdata7'][0];
       $job_title7 = str_replace($filterdata7, "job_company_location_country", $filterdata7);
              $f_key7 = !empty($request['filterdata7'][0]?7:'');

       
        $filterdata8 =  $request['filterdata8'][0];
       $job_title8 = str_replace($filterdata8, "job_title_role", $filterdata8);
              $f_key8 = !empty($request['filterdata8'][0]?8:'');

       
        $filterdata9 =  $request['filterdata9'][0];
       $job_title9 = str_replace($filterdata9, "job_title_role", $filterdata9);
              $f_key9 = !empty($request['filterdata9'][0]?9:'');

       
        $filterdata10 =  $request['filterdata10'][0];
       $job_title10 = str_replace($filterdata10, "job_title", $filterdata10);
      $f_key10 = !empty($request['filterdata10'][0]?10:'');

       
       $totalvalue = array_merge(@$job_title1,@$job_title2,@$job_title3,@$job_title4,@$job_title5,@$job_title6,@$job_title7,@$job_title8,@$job_title9,@$job_title10);
       
//         $totalkey = array_merge(@$f_key1,@$f_key2,@$f_key3,@$f_key4,@$f_key5,@$f_key6,@$f_key7,@$f_key8,@$f_key9,@$f_key10);
// print_r($totalvalue); die;
        
        //str_replace(".", "-", $var1)

        $title = $request['job_title'];
        
      $substr=   substr(str_replace('×', ', ', $title), 1);
       
      $arraydata = explode(",",$substr);
      $alltitle =  implode(",",array_filter($totalvalue));
      
      $expdata = explode(",",$alltitle);
      
    //   $allkeys =  implode(",",array_filter($totalkey));
    //   $filter_key = explode(",",$allkeys);
        
         $save_name = $request['save_name'];
          $filtertype = $request['job_title'];
          $status = $request['status'];
          
          if($request['status'] == 1){
              foreach($arraydata as $key=>$value){
                $storehistory = new SaveHistory();
                $storehistory->title = $value;
                $storehistory->user_id = Auth::id();
                $storehistory->filter_type = $expdata[$key];
                $storehistory->filter_name = $expdata[$key];
               //  $storehistory->filter_key = $filter_key[$key];
                $storehistory->save_name = $save_name;
                $storehistory->status = $status;
                $storehistory->save();
            }
          }else{
               
              $savehistory = SaveHistory::where('user_id',Auth::id())->where('save_name',$save_name)->first();
             
              foreach($arraydata as $key=>$value){
                $storehistory = new SaveHistory();
                $storehistory->title = $value;
                $storehistory->user_id = Auth::id();
                $storehistory->filter_type = $expdata[$key];
                $storehistory->filter_name = $expdata[$key];
               // $storehistory->filter_key = $filter_key[$key];
                $storehistory->save_name = $savehistory['save_name'];
                $storehistory->status = $status;
                $storehistory->save();
            }
          }
          
         
       
    }
    
    public function RemoveSavedHistory(Request $request,$savename){
       
        $savehistory =DB::table("save_history")->whereIn('save_name',explode(",",$savename))->delete();
          return redirect('/prospecting'); 
    }
    
    public function RenameSavedHistory(Request $request,$savename){

        $savehistory = SaveHistory::where('save_name',$savename)->get()->toArray();
        //dd($savehistory);
        foreach($savehistory as $key => $value){
            $checkhistory = SaveHistory::where('save_name',$value['save_name'])->first();
            $checkhistory->save_name=$request->save_name;
            $checkhistory->save();
        }
       
        return redirect('/prospecting'); 
       
    }
    
      public function RemoveHistory(Request $request,$id){
     
        $deletehistory = History::where('user_id',Auth::id())->where('id',$id)->delete();
          return redirect('/prospecting'); 
    }
    
}
