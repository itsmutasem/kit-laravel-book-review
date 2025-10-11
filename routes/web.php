<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use \App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);

Route::resource('reviews', ReviewController::class);

Route::get('/signup', [AuthController::class, 'signupPage'])->name('auth.signup');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
