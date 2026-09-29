<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/home', function () {
//    return view('home');
//});

Route::get('/home', [MainController::class, 'showIndex']) -> name('home');

//Route::get('/array', function () {
//    return view('array');
//});

Route::get('/array', [MainController::class, 'showArray'])-> name('array');