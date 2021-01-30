<?php
namespace App\Http\controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;


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


// Route::get('/blogs/content', function () {
//     return view('pages.content');
// // });

// Route::get('/blogs/create', function () {
//     return view('pages.create');
// });




Route::resource('blogs', BlogController::class);

Route::get('user/{id}', [UserController::class, 'show']);