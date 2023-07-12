<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Users
Route::controller( UserController::class )->group( function () {
    Route::get( '/users', 'getUsers' ); // Read All Users
    Route::get( '/user/{userId}', 'getUserById' ); // Read User By ID
    Route::post( '/user/create', 'addUser' ); // Create User
    Route::post( '/user/{userId}/update', 'updateUser' ); // Update User
    Route::get( '/user/{userId}/delete', 'deleteUser' ); // Delete User
} );


// Profiles
Route::controller( ProfileController::class )->group( function () {
    Route::get( '/profiles', 'getProfiles' ); // Read All Profiles
    Route::get( '/user/{userId}/profile', 'getProfileByUserId' ); // Get profile of a specific user
    Route::post( '/user/{userId}/profile/create-or-update', 'createOrUpdateProfileByUserId' ); // Create or update profile
    Route::get( '/user/{userId}/profile/delete', 'deleteProfileByUserId' ); // Delete profile
} );


// Tags
Route::controller( TagController::class )->group( function () {
    Route::get( '/tags', 'getTags' ); // Read All Users
    Route::get( '/tag/{tagId}/posts/', 'getTagsByPostId' ); // Read tags for each posts
    Route::post( '/tag/create', 'addTag' ); // Create tag for a specific post
    Route::post( '/tag/{tagId}/update', 'updateTag' ); // Update tag for a specific post
    Route::get( '/tag/{tagId}/delete', 'deleteTag' ); // Delete tag for a specific post
} );


// Posts
Route::controller( PostController::class )->group( function () {
    Route::get( '/posts', 'getPosts' ); // Read All Posts
    Route::get( '/post/{postId}', 'getPostById' ); // Read Post By Id
    Route::get( '/posts/user/{userId}', 'getPostsByUserId' ); // Read Post By User Id
    Route::post( '/post/create', 'addPost' ); // Create Post
    Route::post( '/post/{postId}/update', 'updatePost' ); // Update Post
    Route::get( '/post/{postId}/delete', 'deletePost' ); // Delete Post
} );


// Comments
Route::controller( CommentController::class )->group( function () {
    Route::get( '/comments', 'getComments' ); // Read All Comments
    Route::get( '/comments/{commentId}', 'getCommentById' ); // Read  Comments with comment id
    Route::get( '/post/{postId}/comments', 'getCommentByPostId' ); // Read comments for a specific post
    Route::get( '/user/{userId}/comments', 'getCommentsByUserId' ); // Read comments of a specific user
    Route::get( '/post/{postId}/user/{userId}/comments', 'getCommentsByPostIdAndUserId' ); // Read comments for a specific post done by a specific user
    Route::post( '/comment/create', 'addComment' ); // Create Comment
    Route::post( 'comment/{commentId}/update', 'updateComment' ); // Update Comment
    Route::get( '/comment/{commentId}/delete', 'deleteComment' ); // Delete Comment
} );
