<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController; // Import the HomeController

Route::get('/', function(){     
    $posts = DB::select("select * FROM posts"); // Retrieve all posts from the 'posts' table
    return view('home')->with("posts",$posts);});// Define the 'home' route

// Posts routes
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

// Comments routes
Route::post('/comments/{post}', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments/{post}/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/comments/{post}/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{post}/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

// User routes
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');

Route::get('/unique-users', 'UserController@index')->name('unique-users.index');
Route::get('/unique-users/{user}', 'UserController@show')->name('unique-users.show');

Route::get('/some-route', 'App\Http\Controllers\UserController@index');