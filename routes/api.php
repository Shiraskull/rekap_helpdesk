<?php

use App\Http\Controllers\WebController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/login',[WebController::class,'login']);
Route::get('/kota',[WebController::class,'kota'])->middleware(['auth:sanctum']);
Route::get('/logout',[WebController::class,'logout'])->middleware(['auth:sanctum']);
