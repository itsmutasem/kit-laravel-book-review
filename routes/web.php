<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use \App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);

Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
