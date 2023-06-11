<?php

use App\Http\Controllers\DemoController;
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

Route::get('/question1', [DemoController::class, 'question1']);
Route::get('/question2', [DemoController::class, 'question2']);
Route::get('/question3', [DemoController::class, 'question3']);
Route::get('/question4', [DemoController::class, 'question4']);
Route::get('/question5', [DemoController::class, 'question5']);
Route::get('/question6', [DemoController::class, 'question6']);
Route::get('/question7', [DemoController::class, 'question7']);
Route::get('/question8', [DemoController::class, 'question8']);
Route::get('/question9', [DemoController::class, 'question9']);
Route::get('/question10', [DemoController::class, 'question10']);
Route::get('/question11', [DemoController::class, 'question11']);
Route::get('/question12', [DemoController::class, 'question12']);
Route::get('/question13', [DemoController::class, 'question13']);
Route::get('/question14', [DemoController::class, 'question14']);
Route::get('/question15', [DemoController::class, 'question15']);
