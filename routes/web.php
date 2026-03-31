<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;    
use App\Http\Controllers\UserController;   
use App\Http\Controllers\BladeController;  
use App\Http\Controllers\Practice_5Controller;  

// Route::get('/post',['app\\Http\\Controllers\\PostController','show']);

// Route::get('/post',[PostController::class,'show']);

// Route::get('/post/{id}',[PostController::class,'show']);

//Практика 3

//Задание 1
// Route::get('/user',[UserController::class,'show']);

//Задание 2

//Задание 3
// Route::get('/user/{all}',[UserController::class,'show']);

//Задание 8
// Route::get('/user',[UserController::class,'show']);

// Route::get('/user/{name}',[UserController::class,'show']);

//Практика 4

// Route::get('/post',[PostController::class,'show']);
// Route::get('/post',[PostController::class,'show']);

//Практика 5
Route::get('/five',[Practice_5Controller::class,'show']);







?>