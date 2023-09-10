<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Posts Routes (Resourceful)
Route::resource('posts', PostController::class);

// Comments Routes
Route::prefix('comments')->group(function () {
    // Store a Comment
    Route::post('/{post}', [CommentController::class, 'store'])->name('comments.store');
    // Edit a Comment
    Route::get('/{post}/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
    // Update a Comment
    Route::put('/{post}/{comment}', [CommentController::class, 'update'])->name('comments.update');
    // Delete a Comment
    Route::delete('/{post}/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
});

// User Routes
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
// Unique Users Routes
Route::prefix('unique-users')->group(function () {
    // List Unique Users
    Route::get('/', [UserController::class, 'index'])->name('unique-users.index');
    // Show Unique User
    Route::get('/{user}', [UserController::class, 'show'])->name('unique-users.show');
});
