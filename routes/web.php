<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TamuController;
Route::get('/tamu/daftar', [TamuController::class, 'index']);
Route::get('/tamu', [TamuController::class, 'create']);
Route::post('/tamu', [TamuController::class, 'store']);


