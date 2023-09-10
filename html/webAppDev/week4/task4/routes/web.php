<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task4Controller;

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

Route::get('/greeting/index', function () {
    return view('greetings.index');
});

Route::get('/greeting/greeting', [Task4Controller::class, 'greetings'])->name('greetings');
Route::get('/show/show', [Task4Controller::class, 'show'])->name('source');
