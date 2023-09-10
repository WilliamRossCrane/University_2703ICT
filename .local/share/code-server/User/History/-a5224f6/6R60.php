<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return include(public_path('greeting/greeting.php'));
});

Route::get('/greeting/index', function () {
    return view('greeting.index');
});

Route::get('/greeting/show', function () {
    return include(public_path('greeting/show.php'));
});
