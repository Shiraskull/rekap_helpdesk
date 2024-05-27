<?php

use App\Http\Controllers\RekapController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/rekap');
});

Route::resource('rekap', RekapController::class);
