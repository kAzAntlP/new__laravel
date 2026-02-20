<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;    

Route::get('/post',['App\\Http\\Controllers\\PostController','show']);





?>