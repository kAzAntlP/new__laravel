<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;

// task 1
// class Practice_5Controller extends Controller
// {
//     public function show() 
//     {
//         return view('post.practice5', ['name' => '= Эпштенй', 'age' => '= 67', 'salary' => '= 1488$']);
//     }
// }

// task 2
// class Practice_5Controller extends Controller
// {
//     public function show() 
//     {
//         return view('Practice_5.practice5', ['color' => 'color:red']);
//     }
// }


// task 3
// class Practice_5Controller extends Controller
// {
//     public function show() 
//     {
//         return view('Practice_5.practice5_task3', []);
//     }
// }

// // task 4
// class Practice_5Controller extends Controller
// {
//     public function show() 
//     {
//         return view('Practice_5.practice5_task4', ['color' => 'color:red']);
//     }
// }

// task 5
// class Practice_5Controller extends Controller
// {
//     public function show() 
//     {
//         return view('Practice_5.practice5_task5', ['text' => 'hello']);
//     }
// }

// task 6
// class Practice_5Controller extends Controller
// {
//     public function show() 
//     {
//         return view('Practice_5.practice5_task6', ['day' => '03', 'moth' => '04', 'year' => '2026   ' ]);
//     }
// }

// task 7
// class Practice_5Controller extends Controller
// {
//     public function show() 
//     {

//         return view('Practice_5.practice5_task7', ['Employee' => ['name = Viktor', 'age = 67', 'salary = 1488']]);
//     }
// }

// task 8
// class Practice_5Controller extends Controller
// {
//     public function show() 
//     {

//         return view('Practice_5.practice5_task8', ['arr' => [
//         67, 1488, 69, 2001, 'Близнецы'
//         ]]);
//     }
// }

// task 9
// class Practice_5Controller extends Controller
// {
//     public function show() 
//     {
//         return view('Practice_5.practice5_task9', ['city' => 'Moscow']);
//     }
// }

// task 9
// class Practice_5Controller extends Controller
// {
//     public function show() 
//     {

//         return view('Practice_5.practice5_task10', ['location' => [
//             'Северная Корея', 'Чунгук',
//             'Омерика', 'Нев Йорке',
//             'Япония', 'Даты Байо',
//             ]]);
//     }
// }

// task 11
// class Practice_5Controller extends Controller
// {
//     public function show() 
//     {

//         return view('Practice_5.practice5_task11', [
//             'year' => '1488',
//             'month' => 'may', 
//             'day' => '67']);
//     }
// }

// task 12
class Practice_5Controller extends Controller
{
    public function show() 
    {

        return view('Practice_5.practice5_task11', [
            'year' => '1488',
            'month' => 'may', 
            'day' => '67']);
    }
}

