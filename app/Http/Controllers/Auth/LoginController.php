<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:contentCreator')->except('logout');
        $this->middleware('guest:student')->except('logout');
    }

    public function logout(Request $request) {
        if(Auth::guard('contentCreator')->check())
        {
            Auth::guard('contentCreator')->logout();
            return redirect('/home');
         }
        else if(Auth::guard('student')->check())
        {
            Auth::guard('student')->logout();
            return redirect('/home');
         }
        else{
            return redirect('/home');
        }

    }
    
    public function showContentCreatorLogin(){
        return view('auth.content_creator_login');
    }
    
    public function contentCreatorLogin(Request $request){
            
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required|min:8',
            ]);

            if (Auth::guard('contentCreator')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
                return redirect('/home');
            }
            return back()->withInput($request->only('email'))->withErrors(['email' => 'Please enter correct credentials']);
    }

    public function showStudentLogin(){
        return view('auth.studentLogin');
    }
    
    public function studentLogin(Request $request){
            
            $validation = $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required|min:8'
            ]);

            if (Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
                return redirect('/home');
            }
            return back()->withInput($request->only('email'))->withErrors(['email' => 'Please enter correct credentials']);
    }
}
