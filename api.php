<?php

use App\Http\Controllers\AnalysesController;
use App\Http\Controllers\BranchesController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PatientsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('analyses',AnalysesController::class);
Route::apiResource('branches',BranchesController::class);
Route::apiResource('doctors',DoctorsController::class);
Route::apiResource('patients',PatientsController::class);
