<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

   protected $table = 'blog';
    
   protected $fillable = ['author_name', 'author_title','blog_title','blog_category','blog_image','description'];
   
   public function blogdetail(){
       return $this->hasOne(BlogCategory::class,'id','category_id');
   }

   public function blog(){
       return $this->hasMany(Comment::class,'blog_id','id');
   }
      

}
