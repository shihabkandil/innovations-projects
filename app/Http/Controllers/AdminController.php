<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\ContentCreator;
use App\Models\Contact;
use App\Models\Admin;
use Auth;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Courses;
use App\Models\Student;

class AdminController extends Controller
{

     /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data,$guard)
    {
        if($guard == 'admin'){
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:admins,email'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ],[
                'name.required'=> trans('messages.required name'), // custom message translation
                'email.required'=> trans('messages.email required'), // custom message translation
                'password.min'=> trans('messages.password less than 8') // custom message translation
             ]);
        }
    }
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
        
        return view('admin.dashboard',['contentCreators' => ContentCreator::getall(), 'students' => Student::getall(), 'courses' => Courses::getapproved(), 'articles' => Article::getApproved()]);
        
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

    public function addAdminForm(){
        return view('admin.addAdmin');
    }

    public function addAdmin(Request $request){
        $this->validator($request->all(),'admin')->validate();
        
        $admin = Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect('/dashboard');
        }
        return back()->withInput($request->only('email', 'password'))->withErrors($admin);
    }

    public function logout(Request $request) {
        if(Auth::guard('admin')->check())
        {
            Auth::guard('admin')->logout();
            return redirect('/AdminLogin');
         }
    }

}
