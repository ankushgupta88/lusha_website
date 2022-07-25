<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class New_pagescontroller extends Controller
{
    public function index(){
        return view('home');
    }
 
}