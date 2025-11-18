<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about')->name('about');

Route::fallback(function(){
    return "Page not found. Return <a href='/'>home</a>.";
})->name('fallback');