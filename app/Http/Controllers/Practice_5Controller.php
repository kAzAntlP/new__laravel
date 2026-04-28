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
// class Practice_5Controller extends Controller
// {
//     public function show() 
//     {
//         $str = '<b>text</b>';
//         return view('Practice_5.practice5_task12',['str' => $str]);
//     }
// }

// task 15
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

// task 16
// class Practice_5Controller extends Controller
// {
//     public function show() 
//     {
//         return view('Practice_5.practice5_task14', [
//             'year' => '67',
//             ]);
//     }
// }

// task 18
// class Practice_5Controller extends Controller
// {
//     public function show(Request $request) 
//     {
//         $numbers = [1, 2, 3, 4, 5, 6, 7, 8];

//         return view('Practice_5.practice5_task18', compact('numbers'));
//     }
// }

// task 19
// class Practice_5Controller extends Controller
// {
//     public function show(Request $request) 
//     {
//         $numbers = [1, 2, 3, 4, 5, 6, 7, 8];

//         return view('Practice_5.practice5_task19', ['nums' => $numbers]);
//     }
// }


// task 20
// class Practice_5Controller extends Controller
// {
//     public function show(Request $request) 
//     {
//         $numbers = [67, 1488, 322, 2];

//         return view('Practice_5.practice5_task20', ['nums' => $numbers]);
//     }
// }

// task 21
// class Practice_5Controller extends Controller
// {
//     public function show(Request $request) 
//     {
//         $numbers = [67, 1488, 322, 2];

//         return view('Practice_5.practice5_task21', ['nums' => $numbers]);
//     }
// }

// task 22
// class Practice_5Controller extends Controller
// {
//     public function show(Request $request) 
//     {
//         $people = [
//             '1' => 'Руслан',
//             '2' => 'Эль примо',
//             '3' => 'Эпшейн',
//             '4' => 'дети до 12 лет',
//             '5' => 'моргенштерн',
//         ];

//         return view('Practice_5.practice5_task22', ['nums' => $people]);
//     }
// }

// task 23
// class Practice_5Controller extends Controller
// {
//     public function show(Request $request) 
//     {
//         $people = [
//             '1' => 'Руслан',
//             '2' => 'Эль примо',
//             '3' => 'Эпшейн',
//             '4' => 'дети до 12 лет',
//             '5' => 'моргенштерн',
//         ];

//         return view('Practice_5.practice5_task23', ['nums' => $people]);
//     }
// }

// task 24
// class Practice_5Controller extends Controller
// {
//     public function show(Request $request) 
//     {
//         $people = [67, 1488, 322, 2];

//         return view('Practice_5.practice5_task24', ['nums' => $people]);
//     }
// }

// task 25
// class Practice_5Controller extends Controller
// {
//     public function show(Request $request) 
//     {
//         // $date = 67;
//         $date = [1488, 67, 55, 1991, 2001];

//         return view('Practice_5.practice5_task25', ['date' => $date]);
//     }
// }

// task 26
// class Practice_5Controller extends Controller
// {
//     public function show(Request $request) 
//     {
//         // $date = 67;
//         $date = [
//         [1, 2, 3, 4],
//         [5, 6, 7, 8],
//         [9, 10, 11, 12],
//         [13, 14, 15, 16]
//         ];

//         return view('Practice_5.practice5_task26', ['date' => $date]);
//     }
// }

// // task 27 and 28
// class Practice_5Controller extends Controller
// {
//     public function show(Request $request) 
//     {
//         	$employees = [
// 		[
// 			'name' => 'user1',
// 			'surname' => 'surname1',
// 			'salary' => 1000,
// 		],
// 		[
// 			'name' => 'user2',
// 			'surname' => 'surname2',
// 			'salary' => 2000,
// 		],
// 		[
// 			'name' => 'user3',
// 			'surname' => 'surname3',
// 			'salary' => 3000,
// 		],
// 	];

//         return view('Practice_5.practice5_task27', ['massif' => $employees]);
//     }
// }

// task 29
// class Practice_5Controller extends Controller
// {
//     public function show(Request $request) 
//     {
//         $users_name = ['Руслан', 'Кирилл', 'Джозаф', 'Pitkid'];

//         return view('Practice_5.practice5_task29', ['massif' => $users_name]);
//     }
// }

// task 30 - 32
class Practice_5Controller extends Controller
{
    public function show(Request $request) 
    {
        $melon = [
            1 => 'OG Buda',
            2 => 'Слава КПСС',
            3 => 'Mayot',
            4 => '163 on my neck',
            5 => 'Quin3D',
            6 => 'Seemee',
            ];

        return view('Practice_5.practice5_task30', ['melon' => $melon]);
    }
}

