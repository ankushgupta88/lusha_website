<?php
use App\Models\Blog;
use App\Models\Comment;
use App\Models\BlogCategory;
use Carbon\Carbon;

$bloglist = Blog::orderBy('id','desc')->get()->toArray();
$recentComment = Comment::with(['blogdetail'])->orderBy('id','desc')->limit(5)->get()->toArray();
$category = BlogCategory::orderBy('id','desc')->get()->toArray();
?>

<div class="blog_sidebar">
               <form method="post" action="{{url('/blog-search')}}">
                   @csrf
                   <label class="wp-block-search__label">Search</label>
                  <div class="search_field_blog">
                      <input class="form-control me-2" name="search" type="search" aria-label="Search" required>
                  <button class="btn btn-outline-success" type="submit">Search</button>
                  </div>
               </form>
               <div class="blog_recent_post">
                  <h2>Recent Posts</h2>
                  <ul>
                      @if(!empty($bloglist))
                      @foreach($bloglist as $key => $value)
                     <li><a href="{{url('/blog-detail',$value['id'])}}">{{$value['blog_title']}}</a></li>
                     @endforeach
                     @endif
                  </ul>
               </div>
               
                <div class="blog_recent_post">
                  <h2>Recent Comments</h2>
                  <ul>
                      @if(!empty($recentComment))
                      @foreach($recentComment as $key => $c_val)
                      
                     <li><a href="{{url('/blog-detail',$c_val['blog_id'])}}">{{$c_val['email']}} on {{$c_val['blogdetail']['blog_title']}}</a></li>
                     @endforeach
                     @endif
                  </ul>
               </div>
               
               <div class="blog_recent_post">
                  <h2>Categories</h2>
                 
                  <ul>
                      @if(!empty($category))
                      @foreach($category as $key => $cat)
                     
                     <li><a href="{{url('/category-search',$cat['id'])}}">{{$cat['category_name']}}</a></li>
                     @endforeach
                     @endif
                  </ul>
                   
               </div>
            </div>