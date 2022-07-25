<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPlan extends Model
{
    use HasFactory;
    protected $table = 'user_plans';
    
    protected $fillable = ['user_id', 'plan_id','credits'];
    
    public function plandetail(){
        return $this->hasOne(Plan::class,'id','plan_id');
    }
    
    public function userDetail(){
        return $this->hasOne(User::class,'id','user_id');
    }
    
     public function orderDetail(){
        return $this->hasMany(Order::class,'user_id','user_id');
    }
}
