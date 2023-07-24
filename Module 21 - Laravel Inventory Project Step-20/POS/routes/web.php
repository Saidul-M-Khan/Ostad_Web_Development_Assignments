<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationMiddleware;
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


/* Ajax Call Route */
// Users
Route::controller( UserController::class )->group( function () {
    /* User Authentication */
    // Pages
    Route::get( '/signup', 'UserSignupPage' );
    Route::get( '/login', 'UserLoginPage' );
    Route::get( '/forget-password', 'SendOTPToEmailPage' );
    Route::get( '/verify-otp', 'VerifyOTPPage' );
    Route::get( '/reset-password', 'ResetPasswordPage' );

    // Logic
    Route::post( '/UserSignup', 'UserSignup' );
    Route::post( '/UserLogin', 'UserLogin' );
    Route::post( '/SendOTPToEmail', 'SendOTPToEmail' );
    Route::post( '/VerifyOTP', 'VerifyOTP' );
    Route::post( '/ResetPassword', 'ResetPassword' )->middleware([TokenVerificationMiddleware::class]);
    Route::get( '/UserLogout', 'UserLogout' );

    /* User Control */
    Route::get( '/users', 'getUsers' ); // Read All Users
    Route::get( '/user/{userId}', 'getUserById' ); // Read User By ID
    Route::post( '/user/create', 'addUser' ); // Create User
    Route::post( '/user/{userId}/update', 'updateUser' ); // Update User
    Route::get( '/user/{userId}/delete', 'deleteUser' ); // Delete User

    // Dashboard
    Route::get('/dashboard', 'UserDashboardPage')->middleware([TokenVerificationMiddleware::class]);
} );


// Customer API
Route::get("customers/create",[CustomerController::class,'CustomerCreatePage'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/CustomerCreate",[CustomerController::class,'CustomerCreate'])->middleware([TokenVerificationMiddleware::class]);
Route::get("/list-customer",[CustomerController::class,'CustomerList'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/delete-customer",[CustomerController::class,'CustomerDelete'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/update-customer",[CustomerController::class,'CustomerUpdate'])->middleware([TokenVerificationMiddleware::class]);

