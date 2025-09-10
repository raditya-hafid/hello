<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TentangSayaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentangsaya', [TentangSayaController::class, 'index']);

//menampilkan page form membuat atau menambahkan post (method get)
Route::get('/posts/create', [PostController::class, 'create']);

//Untuk menyimpan data dari form
Route::post('/posts', [PostController::class, 'store']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post}', [PostController::class, 'show']);