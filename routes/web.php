<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowerController;

Route::get('/', [BookController::class, 'index']); 

Route::resource('books', BookController::class);
Route::resource('borrowers', BorrowerController::class);