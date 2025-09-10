<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TentangSayaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentangsaya', [TentangSayaController::class, 'index']);