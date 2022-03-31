<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CartController;
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
Route::get('/editProfile', [PagesController::class, 'editProfile'] );
Route::get('/checkout', [PagesController::class, 'checkout'] );
Route::get('/browse_courses', [CategoryController::class, 'index'] );
Route::get('/contact', [PagesController::class, 'contact'] );
Route::get('/about', [PagesController::class, 'about'] );
Route::get('/logout', [LoginController::class,'logout']);
Route::get('/redirect/facebook', [SocialController::class, 'redirect']);
Route::get('/callback/facebook', [SocialController::class, 'callback']);
Auth::routes(['verify'=> true]);

Route::resource('category','CategoryController');
Route::get('/cart', [CartController::class, 'index'] );
//Route::resource('cart','CartController');

Route::prefix('admin')->middleware(['auth' , 'isAdmin'])->group(function(){
    Route::get('/dashboard' , [DashboardController::class,'index']);
});


Route::get('/quiz', [StudentController::class, 'quiz'] );
