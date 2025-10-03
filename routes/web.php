<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TentangSayaController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/tentangsaya', [TentangSayaController::class, 'index']);




Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});




Route::middleware(['auth'])->group(function () {
    //menampilkan page form membuat atau menambahkan post (method get)
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    //Untuk menyimpan data dari form
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

    // Rute untuk MENAMPILKAN form edit (method GET)
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    // Rute untuk MENYIMPAN PERUBAHAN dari form edit (method PUT)
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

    Route::resource('categories', CategoryController::class)->middleware('can:is-admin');
});

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
