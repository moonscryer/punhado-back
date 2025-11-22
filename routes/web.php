<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::view('/about', 'about')->name('about');

Route::fallback(function () {
    return "Page not found. Return <a href='/'>home</a>.";
})->name('fallback');