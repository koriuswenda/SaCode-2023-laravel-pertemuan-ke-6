<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;  

Route::get('/', function () {
    return view('welcome');
});

/*
|===================
| Home
|===================
*/

Route::get( ' index', [Homecontroller::class, 'index']);

Route::get( ' page/profile', [Homecontroller::class, 'profile']);
