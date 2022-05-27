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
Route::group(['middleware'=>'language'], function () {
    
        Route::get('/', [PagesController::class, 'index'] )->name('home');
        Route::get('/home', [PagesController::class, 'index'] )->name('home');
        Route::get('/student_register', [PagesController::class, 'StudentRegister'] );
        Route::get('/instructor_register', [PagesController::class, 'InstructorRegister'] );
        Route::get('/login', [PagesController::class, 'login'] );
        Route::get('/bundles', [PagesController::class, 'bundles'] );

        Route::get('/Catigories', [CategoryController::class, 'index'] );

        Route::middleware(['auth'])->group(function(){
            Route::get('/editProfile/{id}', [StudentController::class, 'editProfile'] );
        });

        
        Route::get('/categories', [CategoryController::class, 'index'] );
        Route::get('/checkout', [PagesController::class, 'checkout'] );
        Route::get('/contact', [PagesController::class, 'contact'] );
        Route::get('/about', [PagesController::class, 'about'] );
        Route::get('/articles', [PagesController::class, 'articles'] );
        Route::get('/subscriptions', [PagesController::class, 'subscribe'] );

        Route::get('/logout', [LoginController::class,'logout']);
        

        Route::get('/register', [RegisterController::class,'showRegisterAs']);

        Route::get('/redirect/{service}', [SocialController::class, 'redirect']);
        Route::get('/callback/{service}', [SocialController::class, 'callback']);

        Route::get('/Categories/{id}' , [CoursesController::class , 'CoursesCategories'] );
        Route::get('/fetch-categories' , [CategoryController::class , 'fetchCategory'] );



        Route::resource('category','CategoryController');

        Route::get('/cart', [CartController::class, 'index'] );

        Route::resource('category','CategoryController');

        Route::group(['middleware' => ['auth:admin']], function() {
            Route::get('/dashboard' , [AdminController::class,'adminDash']);
            Route::get('/AdminLogout', [AdminController::class,'logout']);
          });
        
        
        Route::get('/AdminLogin', [AdminController::class, 'index'] );
        Route::post('/AdminLogin', [AdminController::class, 'adminLogin'])->name('adminLoginForm');


        Route::get('/register/contentCreator', [RegisterController::class,'showContentCreatorRegister']);
        Route::get('/login/contentCreator', [LoginController::class, 'showContentCreatorLogin']);


        Route::get('/register/student', [RegisterController::class,'showStudentRegister'])->name('studentRegisterForm');
        Route::get('/login', [LoginController::class, 'showStudentLogin'])->name('studentLoginForm');

        Route::get('/quiz', [StudentController::class, 'quiz'] );

        Route::get('/news', [NewsApiController::class, 'showNews'] );

        Route::get('/course/{id}', [CoursesController::class, 'showCourse'] );

        Route::get('contentCreator/addContentRequest',[ContentCreatorController::class,'requestUploadContent']);

        Route::post('/register/contentCreator', [RegisterController::class, 'contentCreatorRegister'])->name('contentCreatorRegisterForm');
        Route::post('/login/contentCreator', [LoginController::class, 'contentCreatorLogin'])->name('contentCreatorLoginForm');
        Route::get('contentCreator/addContentRequest',[ContentCreatorController::class,'requestUploadContent']);
        Route::get('contentCreator/writeArticle',[ContentCreatorController::class,'writeArticle']);
        Route::post('contentCreator/submitArticle',[ArticleController::class,'submitArticle']);

        Route::post('/register/student', [RegisterController::class, 'studentRegister'])->name('studentRegisterForm');
        Route::post('/login', [LoginController::class, 'studentLogin'])->name('studentLoginForm');
        Route::post('/home', [StudentController::class, 'updateStudent'])->name('update');

        Route::post('/uploadFile', [FirestorageController::class, 'firebaseStore']);

        Route::get('changeLocale/{locale}', function($lang) {
            \Session::put('locale', $lang);
            return redirect()->back();
        });

});

