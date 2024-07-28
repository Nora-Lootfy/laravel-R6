<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ClassController;


Route::prefix('cars')->group(function() {
    Route::get('', [CarController::class, 'index'])->name('cars.index');
    Route::get('create', [CarController::class, 'create'])->name('cars.create');
    Route::post('', [CarController::class, 'store'])->name('cars.store');
    Route::get('{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
    Route::put('{car}', [CarController::class, 'update'])->name('cars.update');
    Route::delete('{id}/delete', [CarController::class, 'destroy'])->name('cars.destroy');
    Route::get('trashed', [CarController::class, 'showDeleted'])->name('cars.showDeleted');
    Route::patch('{id}', [CarController::class, 'restore'])->name('cars.restore');
    Route::delete('{id}', [CarController::class, 'forceDelete'])->name('cars.forceDelete');
}); 


// Route::resource('cars', CarController::class);
// get: show data
// post: submit new data to server
// put: update data in server
// patch
// delete: 


// Route::get('test/{id}', function($id) {

// });