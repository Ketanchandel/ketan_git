<?php

use App\Http\Controllers\Homeontroller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Homeontroller::class, 'index']);
