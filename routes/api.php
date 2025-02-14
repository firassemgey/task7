<?php

use App\Http\Controllers\LibrariesController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('Libraries',LibrariesController::class);
Route::apiResource('Users',UsersController::class);

