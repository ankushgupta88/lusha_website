<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProspectingList extends Model
{
    use HasFactory;
    protected $table = 'prospecting_lists';
    
    protected $fillable = ['list_id', 'user_id','name','data','title','company','departments','seniority','company_id','full_name','linkedin_url','facebook_url','twitter_url','github_url','work_email','mobile_phone','job_title','job_company_name','new_departments'];
}
