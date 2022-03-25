<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SocialController;


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

Route::get('/', [PagesController::class, 'index'] )->name('home');
Route::get('/home', [PagesController::class, 'index'] )->name('home');
Route::get('/register', [PagesController::class, 'register'] );
Route::get('/login', [PagesController::class, 'login'] );
Route::get('/browse_courses', [PagesController::class, 'browse_courses'] );
Route::get('/contact', [PagesController::class, 'contact'] );
Route::get('/about', [PagesController::class, 'about'] );
Route::get('/logout', [LoginController::class,'logout']);
Route::get('/redirect/{service}', [SocialController::class, 'redirect']);
Route::get('/callback/{service}', [SocialController::class, 'callback']);
Auth::routes(['verify'=> true]);

Route::resource('category','CategoryController');

Route::prefix('admin')->middleware(['auth' , 'isAdmin'])->group(function(){
    Route::get('/dashboard' , [DashboardController::class,'index']);
});

