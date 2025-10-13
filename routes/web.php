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
Route::post('/signup', [AuthController::class, 'signup'])->name('auth.signupStore');

Route::get('/login', [AuthController::class, 'loginPage'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.loginStore');
