<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use \App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');

Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
