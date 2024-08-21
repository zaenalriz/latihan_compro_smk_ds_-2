<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/blog/detail/{slug}',
[BlogController::class,'detail'])
->name('blog_detail');


// backend
Route::get('/login',[LoginController::class,'index'])->name('login');

