<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller; 
use db;
use Carbon\Carbon;


class indexcontroller extends Controller
{
    public function dashboard()
    {   
        
         return view('admin/dashboard');
    }
}
