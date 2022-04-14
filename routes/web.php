<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HelloController;

Route::get('/', [ MainController::class, 'index' ])->name('home');
Route::get('/blog', [ BlogController::class, 'index' ]);
Route::get('/main', [ HelloController::class, 'index' ]);
