<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
Route::get('/student_register', [PagesController::class, 'StudentRegister'] );
Route::get('/instructor_register', [PagesController::class, 'InstructorRegister'] );
Route::get('/login', [PagesController::class, 'login'] );
Route::get('/bundles', [PagesController::class, 'bundles'] );
Route::get('/editProfile', [PagesController::class, 'editProfile'] );
Route::get('/Catigories', [CategoryController::class, 'index'] );
Route::get('/checkout', [PagesController::class, 'checkout'] );
Route::get('/contact', [PagesController::class, 'contact'] );
Route::get('/about', [PagesController::class, 'about'] );
Route::get('/articles', [PagesController::class, 'articles'] );
Route::get('/subscriptions', [PagesController::class, 'subscribe'] );

Route::get('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'showRegisterAs']);

Route::get('/redirect/facebook', [SocialController::class, 'redirect']);
Route::get('/callback/facebook', [SocialController::class, 'callback']);

Route::get('/Catigories/{id}' , [CoursesController::class , 'CoursesCategories'] );


Route::resource('category','CategoryController');

Route::get('/cart', [CartController::class, 'index'] );

Route::prefix('admin')->middleware(['auth' , 'isAdmin'])->group(function(){
    Route::get('/dashboard' , [DashboardController::class,'index']);
    Route::get('/AdminLogin', [AdminLoginController::class, 'index'] );
});


Route::get('/register/contentCreator', [RegisterController::class,'showContentCreatorRegister']);

Route::get('/login/contentCreator', [LoginController::class, 'showContentCreatorLogin']);

Route::get('/quiz', [StudentController::class, 'quiz'] );

Route::get('/news', [NewsApiController::class, 'showNews'] );

Route::get('/course/{id}', [CoursesController::class, 'showCourse'] );

Route::get('contentCreator/upload',[ContentCreatorController::class,'requestUploadContent']);

Route::post('/register/contentCreator', [RegisterController::class, 'contentCreatorRegister'])->name('contentCreatorRegisterForm');
Route::post('/login/contentCreator', [LoginController::class, 'contentCreatorLogin'])->name('contentCreatorLoginForm');


