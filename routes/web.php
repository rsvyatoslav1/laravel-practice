<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;
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

Route::get('/array/shuffle', [MainController::class, 'shuffleArray'])-> name('array.shuffle');

Route::get('/array/sort', [MainController::class, 'sortArray'])-> name('array.sort');

Route::get('/array/filter', [MainController::class, 'filterArray'])-> name('array.filter');

Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');

Route::get('/reports/create', function () {
    return view('reports.create');
})->name('reports.create');