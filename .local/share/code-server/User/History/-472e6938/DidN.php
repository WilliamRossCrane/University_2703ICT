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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task4/greetings', [Task4Controller::class, 'greetings'])->name('greetings');

// Additional route for viewing the source file
Route::get('/task4/show', [Task4Controller::class, 'show'])->name('show');
