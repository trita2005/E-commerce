<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class adminicontroller extends Controller
{
    public function dashboard() 
{
    return view('admin.dashboard');
}
}
   