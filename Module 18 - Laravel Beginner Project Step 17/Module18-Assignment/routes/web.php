<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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

Route::get('/categories', [CategoryController::class, 'getCategoryData']);
Route::get('/posts-data', [PostController::class, 'getPostData']);
Route::get('/all-posts', [PostController::class, 'getAllPosts']);
Route::get('/posts', [PostController::class, 'getPosts']);
Route::get('/posts/{categoryId}', [PostController::class, 'getPostCountByCategory']);
Route::post('/posts/{id}/delete', [PostController::class, 'postDelete']);
Route::get('/categories/{id}/posts', [PostController::class, 'getPostsByCategory']);
Route::get('/latest-posts/{categoryId}', [PostController::class, 'getLatestPosts']);
