<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
});

// Blog CRUD Routes
Route::get('/all', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create']);
Route::post('/save', [PostController::class, 'store']);
Route::get('/edit/{id}', [PostController::class, 'edit']);
Route::post('/update/{id}', [PostController::class, 'update']);
Route::get('/delete/{id}', [PostController::class, 'destroy']);
