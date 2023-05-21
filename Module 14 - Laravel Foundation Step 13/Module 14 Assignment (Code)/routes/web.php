<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/question1', [DemoController::class, 'DemoActionQ1']);
Route::post('/question2', [DemoController::class, 'DemoActionQ2']);
Route::get('/question3', [DemoController::class, 'DemoActionQ3']);
Route::post('/question4', [DemoController::class, 'DemoActionQ4']);
Route::post('/question5', [DemoController::class, 'DemoActionQ5']);
Route::post('/question6', [DemoController::class, 'DemoActionQ6']);
Route::post('/submit', [DemoController::class, 'DemoActionQ7']);
