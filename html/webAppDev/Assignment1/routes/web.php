<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

// Home 
Route::get('/', [HomeController::class, 'index'])->name('home');

// Posts 
Route::resource('posts', PostController::class)->except(['edit', 'update']);
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');

// Comments 
Route::prefix('comments')->group(function () {
    Route::post('/{post}', [CommentController::class, 'store'])->name('comments.store');
    Route::get('/{post}/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
    Route::put('/{post}/{comment}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('/{post}/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
});

// User 
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
// Unique users
Route::prefix('unique-users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('unique-users.index');
    Route::get('/{user}', [UserController::class, 'show'])->name('unique-users.show');
});
