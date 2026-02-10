<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/second', [MainController::class, 'show1']);
    
Route::get('/', function () {
    return view('home');
});

Route::get('/array', function () {
    return view('array');
});