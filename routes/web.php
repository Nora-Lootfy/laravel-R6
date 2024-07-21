<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarController;


Route::get('cars/create', [CarController::class, 'create'])->name('cars.create');
Route::post('cars', [CarController::class, 'store'])->name('cars.store');
