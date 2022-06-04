<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use App\Models\NewsApiModel;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    private $apiModel, $articles;

    public function __construct(){
        $this->apiModel = new NewsApiModel();
        $this->articles = new Article();
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

    public function submitContactUs(Request $request){
        $contact = Contact::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message']
        ]);
        return redirect('/home');
    }

    public function bundles(){
        return view('pages.bundles');
    }

    public function articles(){
        return view('pages.articles',['articles'=>$this->articles->getApproved()]);
    }
    
    public function articleDetails($id){
        return view('pages.articleDetails',['article'=>$this->articles->getArticle($id)]);
    }

    public function subscribe(){
        return view('pages.subscribe');
    }

}
