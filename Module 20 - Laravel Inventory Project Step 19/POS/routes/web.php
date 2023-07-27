<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller( UserController::class )->group( function () {

    Route::post( '/UserSignup', 'UserSignup' );
    Route::post( '/UserLogin', 'UserLogin' );
    Route::post( '/SendOTPToEmail', 'SendOTPToEmail' );
    Route::post( '/VerifyOTP', 'VerifyOTP' );
    Route::post( '/ResetPassword', 'ResetPassword' );
    Route::get( '/ProfileUpdate', 'ProfileUpdate' );

} );
