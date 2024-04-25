<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\BrandsController;

Route::get('/', function () {
    return view('welcome on taufik');
});

Route::get('/cars', [CarsController::class, 'index']);
Route::post('/cars', [CarsController::class, 'store']);
Route::get('/cars/{id}', [CarsController::class, 'show']);
Route::put('/cars/{id}', [CarsController::class, 'update']);
Route::delete('/cars/{id}', [CarsController::class, 'destroy']);

Route::get('/brands', [BrandsController::class, 'index']);
Route::post('/brands', [BrandsController::class, 'store']);
Route::get('/brands/{id}', [BrandsController::class, 'show']);
Route::put('/brands/{id}', [BrandsController::class, 'update']);
Route::delete('/brands/{id}', [BrandsController::class, 'destroy']);
