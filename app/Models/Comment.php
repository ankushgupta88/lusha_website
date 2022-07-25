<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

   protected $table = 'blog_comment';

   public function blogdetail(){
       
       return $this->hasOne(Blog::class,'id','blog_id');
   }
}
