<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/home', [PageController::class, 'home']);
Route::get('/product', [PageController::class, 'product']);