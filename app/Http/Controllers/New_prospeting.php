<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class New_prospeting extends Controller
{
    public function index(){
        return view('customer/prospecting-new');
    }
}