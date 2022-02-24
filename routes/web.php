<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
    HTTP Methods
    GET - Request a resource
    POST - Create a new resource
    PUT - Update a resource
    PATCH - Modify a resource
    DELETE - Delete a resource
    OPTIONS - Ask the server which verbs are allowed 
*/

// Get
Route::get('/blog', [PostsController::class, 'index']);
Route::get('/blog/1', [PostsController::class, 'show']);

//Post
Route::get('/blog/create', [PostsController::class, 'create']);
Route::post('/blog', [PostsController::class, 'store']);

// PUT & PATCH
Route::get('/blog/edit/1', [PostsController::class, 'edit']);
Route::patch('/blog/1', [PostsController::class, 'update']);

// Delete
Route::delete('/blog/1', [PostsController::class, 'destroy']);

// Resource route for all CRUD operations
// Route::resource('blog', PostsController::class);

// Route for single action controllers
Route::get('/', HomeController::class);

// Route with multiple methods
// Route::get(['GET', 'POST'], '/', [PostsController::class, 'index']);

// Any HTTP method
// Route::any('/', [PostsController::class, 'index']);

// Return view
// Route::view('/', 'index');

// Return view with values
// Route::view('/', 'index', ['name' => 'Dary']);

// Route::get('/', function () {
//     //Return config values
//     dd(config('services.mailgun.domain'));
//     return view('welcome');
// });

// One single route
// Route::get('blog', [PostsController::class, 'index']);