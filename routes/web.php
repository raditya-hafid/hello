<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TentangSayaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentangsaya', [TentangSayaController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post}', [PostController::class, 'show']);