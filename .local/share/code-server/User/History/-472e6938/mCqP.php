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

// Route to display the form
Route::view('/task4', 'task4.index')->name('task4.index');

// Route to handle the form submission
Route::get('/task4/greetings', [Task4Controller::class, 'greetings'])->name('greetings');
