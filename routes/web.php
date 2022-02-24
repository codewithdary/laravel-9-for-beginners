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
Route::get('/article', [PostsController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [PostsController::class, 'show'])->name('blog.show');
// Route::get('/blog/{id?}', [PostsController::class, 'show']); // Optional route parameter

//Post
Route::get('/blog/create', [PostsController::class, 'create'])->name('blog.create');
Route::post('/blog', [PostsController::class, 'store'])->name('blog.store');

// PUT & PATCH
Route::get('/blog/edit/{id}', [PostsController::class, 'edit'])->name('blog.edit');
Route::patch('/blog/{id}', [PostsController::class, 'update'])->name('blog.update');

// Delete
Route::delete('/blog/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');

// Resource route for all CRUD operations
// Route::resource('blog', PostsController::class);

// Route for single action controllers
Route::get('/', HomeController::class);

/* 
    Routes with regex expressions
    Route::get('/blog/{id}', [PostsController::class, 'show'])->where('id', '[0-9]+);
    Route::get('/blog/{name}', [PostsController::class, 'show'])->where('name', '[A-Za-z]+);
    Route::get('/blog/{id}/{name}', [PostsController::class, 'show'])->where([
        'id' => '[0-9]+',
        'name' => '[A-Za-z]+',
    ]);
    
    Laravel Method Helpers
    Route::get('/blog/{id}', [PostsController::class, 'show'])->whereNumber('id');
    Route::get('/blog/{name}', [PostsController::class, 'show'])->whereAlpha('name');
    Route::get('/blog/{id}/{name}', [PostsController::class, 'show'])
        ->whereNumber('id')
        ->whereAlpha('name');
*/

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