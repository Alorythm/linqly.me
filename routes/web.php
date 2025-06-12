<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\RateLimiter;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'index'])->name('homepage');

Route::get('/{user}', [PublicController::class, 'show'])->name('show.user');
