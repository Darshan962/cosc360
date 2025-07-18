<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
});

// Blog CRUD Routes
// List all posts
Route::get('/all', [PostController::class, 'index'])->name('posts.index');

// Create post form
Route::get('/create', [PostController::class, 'create'])->name('posts.create');

// Store new post
Route::post('/store', [PostController::class, 'store'])->name('posts.store');

// Edit post form
Route::get('/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');

// Update post
Route::post('/update/{id}', [PostController::class, 'update'])->name('posts.update');

// Delete post
Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
