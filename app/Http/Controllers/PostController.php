<?php

namespace App\Http\Controllers;


// class PostController extends Controller
// {
//     public function show () 
//     {
//        return 'text';
//     }
// }

// class PostController extends Controller
// {
//     public function show () 
//     {
//        return view('test',['var1' => '1', 'var2' => '2']);
//     }
// }

// class PostController extends Controller
// {
//     public function show () 
//     {
//        return view('post.show');
//     }
// }

class PostController extends Controller
{
    public function show () 
    {
       return view('post.show');
    }
}

?>