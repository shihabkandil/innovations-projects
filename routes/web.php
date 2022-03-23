<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/home', [PagesController::class, 'index'] )->name('home');
Route::get('/register', [PagesController::class, 'register'] );
Route::get('/login', [PagesController::class, 'login'] );
Route::get('/browse_courses', [PagesController::class, 'browse_courses'] );
Route::get('/contact', [PagesController::class, 'contact'] );
Route::get('/about', [PagesController::class, 'about'] );
Route::get('/logout', [LoginController::class,'logout']);
Auth::routes(['verify'=> true]);

