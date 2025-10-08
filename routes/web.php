<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use \App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);
// Route::resource('reviews', ReviewController::class);

Route::post('reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::delete('reviews/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
Route::get('reviews', [ReviewController::class, 'index'])->name('reviews.index');
