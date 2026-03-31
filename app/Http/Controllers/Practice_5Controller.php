<?php

namespace App\Http\Controllers;

// task 1
// class Practice_5Controller extends Controller
// {
//     public function show() 
//     {
//         return view('post.practice5', ['name' => '= Эпштенй', 'age' => '= 67', 'salary' => '= 1488$']);
//     }
// }

// task 2
class Practice_5Controller extends Controller
{
    public function show() 
    {
        return view('Practice_5.practice5', ['color' => 'color:red']);
    }
}

