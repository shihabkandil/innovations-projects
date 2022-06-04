<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentCreator;
use App\Models\Contact;
use Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.AdminLogin');
    }

    public function adminDash(){
        
        return view('admin.dashboard');
        
     }


    public function viewContentCreators(){
        return view('admin.viewContentCreators',['contentCreators' => ContentCreator::getall()]);
    }

    public function viewContactForms(){
        return view('admin.contactUs',['contactUs' => Contact::getall()]);
    }

    public function adminLogin(Request $request){
            
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect('/dashboard');
        }

        return back()->withInput($request->only('email'))->withErrors(['email' => 'Please enter correct credentials']);
    }

    public function logout(Request $request) {
        if(Auth::guard('admin')->check())
        {
            Auth::guard('admin')->logout();
            return redirect('/AdminLogin');
         }
    }

}
