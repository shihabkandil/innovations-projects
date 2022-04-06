<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\NewsApiModel;

class PagesController extends Controller
{

    private $apiModel;

    public function __construct(){
        $this->apiModel = new NewsApiModel();
    }

    public function index(){
        $response['news'] = $this->apiModel->fetchNews();
        return view('pages.index', $response);
    }

    public function StudentRegister(){
        return view('auth.student_register');
    }

    public function InstructorRegister(){
        return view('auth.instructor_register');
    }

    public function browse_courses(){
        return view('pages.browseC');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function about(){
        return view('pages.about');
    }

    public function login(){
        return view('auth.login');
    }

    public function checkout(){
        if(Auth::check()){
            return view('pages.checkout');
        }else{
            return redirect('/');
        }  
    }
    

    public function bundles(){
        return view('pages.bundles');
    }

    public function articles(){
        return view('pages.articles');
    }

    public function subscribe(){
        return view('pages.subscribe');
    }

}
