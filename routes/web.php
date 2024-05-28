<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\ReservationController;

Route::middleware(['auth'])->group(function () {
    Route::get('/aluguel', [RentalController::class, 'index']);
    Route::get('/reservas', [ReservationController::class, 'index']);
    Route::get('/veiculos', [CarController::class, 'index']);

    Route::post('/aluguel', [RentalController::class, 'store']);
    Route::post('/reservas', [ReservationController::class, 'store']);
    Route::post('/veiculos', [CarController::class, 'store']);
});
