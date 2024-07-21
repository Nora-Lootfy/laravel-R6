<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ClassController;


Route::get('cars', [CarController::class, 'index']);
Route::get('cars/create', [CarController::class, 'create']);
Route::post('cars', [CarController::class, 'store'])->name('cars.store');
Route::get('cars/{id}', [CarController::class, 'edit'])->name('cars.edit');


Route::get('test/{id}', function($id) {

});