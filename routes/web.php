<?php

use App\Http\Controllers\PostsController;
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

// Route::get('/', function () {
//     //Return config values
//     dd(config('services.mailgun.domain'));
//     return view('welcome');
// });

// One single route
// Route::get('blog', [PostsController::class, 'index']);

// Resource route for all CRUD operations
Route::resource('blog', PostsController::class);