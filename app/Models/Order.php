<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    
    protected $fillable = ['transactionId', 'amount','user_id','plan_id','billing_name','billing_email','billing_address','billing_city','billing_zipcode','billing_country'];

    public function order_user_list()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function order_user_plan_list()
    {
        return $this->belongsTo(Plan::class,'plan_id');
    }
}
