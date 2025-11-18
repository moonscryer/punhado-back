<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(uri:'/about', action:function () {
    return view(view:'about');
});