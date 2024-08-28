<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ExampleController;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::group([], function () {
            //  CarController routes
            Route::resource('cars', CarController::class);
            Route::group([
                'prefix' => 'cars',
                'as' => 'cars.',
                'controller' => CarController::class,
            ], function () {
                Route::get('trashed/get', 'showDeleted')->name('showDeleted');
                Route::patch('{car}', 'restore')->name('restore');
                Route::put('{car}', 'update')->name('update');
                Route::delete('{car}/delete', 'forceDelete')->name('forceDelete');
            });
        
            // ExampleController routes
            Route::group([
                'controller' => ExampleController::class,
            ], function () {
                Route::get('uploadForm', 'uploadForm');
                Route::post('upload', 'upload')->name('upload');
                Route::get('index', 'index');
                Route::get('about', 'about');
            });
        });
    });


