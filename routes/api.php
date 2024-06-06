<?php

use App\Http\Controllers\WebController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
    
})->middleware('auth:sanctum');
Route::post('/login',[WebController::class,'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/kota',[WebController::class,'kota']);
    Route::get('/logout',[WebController::class,'logout']);
    Route::post('/rekap',[WebController::class,'rekap']);
    Route::get('/rekap',[WebController::class,'index']);
}

   
);
