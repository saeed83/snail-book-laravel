<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\FallbackController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BooksController::class,'index']);

// Fallback Controller
// Check Fallbackcontroller and Fallback view
Route::fallback(FallbackController::class);
