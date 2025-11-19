<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about')->name('about');

Route::fallback(function(){
    return "Page not found. Return <a href='/'>home</a>.";
})->name('fallback');

Route::get('/dashboard', [DashboardController::class, 'index']);
