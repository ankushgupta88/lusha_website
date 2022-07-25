<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class search_filter extends Controller
{
    /*public function index(){
        $api_secret = env('API_SECRET'); 
        $api_url = env('API_URL'); 
        $url = $api_url.''."fetchAll";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);

        $data = array(
            "api_secret" => $api_secret,
            "page" => 1,
            "limit" => 1000,
            "order" => "DESC"
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $search = curl_exec($ch);
        $s_list = json_decode($search);
        curl_close($ch);
        
         if($company_list) { ?>
        <table id="company_list2" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Company</th>
                <th>details</th>
                <th>Action</th>
            </tr>
        </thead>
      
        <tbody>
            <?php foreach($s_list->data as $company){ ?>
                <?php //Check company name is exit or not in array
                if($company->job_company_name){ ?>
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
                       <?php   $_id = (array)$company->_id; ?>
                            <button class="btn app-btn-primary float-end show_company_detail" data-company_id="<?php echo $_id; ?>">Show Details</button>
                        </td>
                    </tr>
                <?php } ?>
            <?php  } ?>
        </tbody>
   
        </table>
    <?php }
    }*/
}