<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GameApiController;
use App\Http\Controllers\Api\CharacterApiController;

// Public API (no authentication)

Route::get('/games', [GameApiController::class, 'index']);
Route::get('/games/{game}', [GameApiController::class, 'show']);

Route::get('/characters', [CharacterApiController::class, 'index']);
Route::get('/characters/{character}', [CharacterApiController::class, 'show']);