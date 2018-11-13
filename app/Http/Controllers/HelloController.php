<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HelloController extends Controller
{

    public function functionName() 
    {
        return view('welcomecontroller');
    }

    public function functionName02() 
    {
        return 'test in controller 02';
    }
    
}