<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
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

    public function editProfile(){
        if(Auth::guard('contentCreator')->check()){
            return view('pages.editProfile');
        }else{
            return redirect('/');
        }  
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

}
