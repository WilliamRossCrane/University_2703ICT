<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::post('/comments/{post}', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments/{post}/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/comments/{post}/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{post}/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
