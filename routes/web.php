<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarController;


Route::get('cars/create', [CarController::class, 'create'])->name('cars.create');
Route::post('cars', [CarController::class, 'store'])->name('cars.store');


Route::get('login', [ExampleController::class, 'login']);
Route::post('login', [ExampleController::class, 'receive'])->name('data');


Route::get('cv', [ExampleController::class, 'cv']);


Route::get('', function () {
    return view('welcome');
});

// Route::post('cars', [CarController::class, 'store'])->name('cars.store');





// Route::view('cv', 'cv');


// Route::prefix('accounts')->group(function(){
//     Route::get('', function () {
//         return "accounts index";
//     });

//     Route::get('admin', function () {
//         return "accounts admin";
//     });

//     Route::get('user', function () {
//         return "accounts user";
//     });
// });

// Route::prefix('cars')->group(function(){
//     Route::get('', function () {
//         return "cars index";
//     });

//     Route::prefix('usa')->group(function() {
//         Route::get('ford', function () {
//             return "cars ford";
//         });
//         Route::get('tesla', function () {
//             return "cars tesla";
//         });
//     });

//     Route::prefix('ger')->group(function() {
//         Route::get('ford', function () {
//             return "cars ford";
//         });
//         Route::get('tesla', function () {
//             return "cars tesla";
//         });
//     });
// });

// Route::get('cars/{country?}/{car?}', function($country='', $car='') {
//     return "$country ";
// });

// Route::fallback(function(){
//     return redirect('/');
// });



Route::get('link', function () {
    $url1 = route('w');
    $url2 = route('g');
    return "<a href='$url1'>go to welcome</a> <br> <a href='$url2'>go to page</a> ";
    // return redirect('welcome');
});

Route::get('welcome', function () {
    return "welcome to laravel";
})->name('w');

Route::get('goodbye', function () {
    return "goodbye to laravel";
})->name('g');




