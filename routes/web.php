<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\\Http\\Controllers'], function () {
    //  CarController routes
    Route::resource('cars', 'CarController');
    Route::group([
        'prefix' => 'cars',
        'as' => 'cars.',
        'controller' => 'CarController',
    ], function () {
        Route::get('trashed/get', 'showDeleted')->name('showDeleted');
        Route::patch('{car}', 'restore')->name('restore');
        Route::put('{car}', 'update')->name('update');
        Route::delete('{car}/delete', 'forceDelete')->name('forceDelete');
    });

    // ExampleController routes
    Route::group([
        'controller' => 'ExampleController',
    ], function () {
        Route::get('uploadForm', 'uploadForm');
        Route::post('upload', 'upload')->name('upload');
        Route::get('index', 'index');
        Route::get('about', 'about');
    });
});


Route::get('testOneToOne', [ExampleController::class, 'test']);


Route::get('/download', function (Illuminate\Http\Request $request) {
    $file = $request->input('file');
    $path = public_path('assets/images/' . $file);

    if (file_exists($path)) {
        return response()->download($path);
    } else {
        abort(404, 'File not found');
    }
});