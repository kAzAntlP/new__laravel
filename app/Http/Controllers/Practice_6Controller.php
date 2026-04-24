<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;

// task 1
class Practice_6Controller extends Controller
{
    public function show() 
    {
        return view('Practice_6.practice6_task1', []);
    }
}

