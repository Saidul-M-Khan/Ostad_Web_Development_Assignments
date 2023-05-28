<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RequestRedirectController;
use App\Http\Middleware\RequestValidation;
use Illuminate\Support\Facades\Route;


// Task 1
Route::post('/reg', [RegisterController::class, 'register'])->middleware([RequestValidation::class]);

// Task 2
Route::get('/home', [RequestRedirectController::class, 'homePage']);
Route::get('/dashboard', [RequestRedirectController::class, 'dashboardPage']);

// Task 4
Route::middleware(['authUser'])->group(function(){
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::get('/settings', [AuthController::class, 'settings']);
});
Route::get('/login', [AuthController::class, 'login']);

// Task 5 and Task 7
Route::resource('/product', ProductController::class);

// Task 6
Route::post('/contact', ContactController::class);

// Task 8
Route::get('/', function () {
    return view('welcome');
});


