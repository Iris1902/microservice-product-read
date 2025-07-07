<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products-read', [ProductController::class, 'index']);
Route::get('/products-read/{id}', [ProductController::class, 'show']);
Route::get('/products-read/health', [ProductController::class, 'healthCheck']);
