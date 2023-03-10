<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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
//     return view('welcome');
// });

// Route::view('/', 'index')->name('home');

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/post/{postId}', [PostController::class,'show'])->name('post.show');

Route::view('/about','about')->name('about');

Route::view('/contact','contact')->name('contact');

