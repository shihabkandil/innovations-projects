<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FirestorageController;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\ContentCreator;
use App\Models\Student;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
        $this->middleware('guest:contentCreator');
        $this->middleware('guest:student');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data,$guard)
    {
        if($guard == 'contentCreator'){
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:contentcreators,email'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'cv'=> ['required','mimes:pdf','max:10000'],
            ],[
                'name.required'=> trans('messages.required name'), // custom message translation
                'email.required'=> trans('messages.email required'), // custom message translation
                'password.min'=> trans('messages.password less than 8') // custom message translation
             ]);
        }
        else if($guard == 'student'){
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:students,email'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ],
            [
                'name.required'=> trans('messages.required name'), // custom message translation
                'email.required'=> trans('messages.email required'), // custom message translation
                'password.min'=> trans('messages.password less than 8') // custom message translation
             ]);
    }
}

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\ContentCreator
     */
    protected function contentCreatorRegister(Request $request){

        $this->validator($request->all(),'contentCreator')->validate();

        $file = FirestorageController::store($request['cv'],'ContentCreatorsContent/CV/');

        
        $contentCreator = ContentCreator::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'cv'=> $file,
        ]);

        if (Auth::guard('contentCreator')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect('/home');
        }
        return back()->withInput($request->only('email', 'password'))->withErrors($contentCreator);
        
    }

    public function showContentCreatorRegister(){
        return view('auth.content_creator_register');
    }

    protected function studentRegister(Request $request){

        $this->validator($request->all(),'student')->validate();
        
        $student = Student::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'address' => $request['address'],
            'city' => $request['city'],
            'state' => $request['state'],
            'zip_code' => $request['zip'],
            'password' => Hash::make($request['password']),
        ]);
        
        if (Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect('/home');
        }
        return back()->withInput($request->only('email', 'password'))->withErrors($student);
    }

    public function showRegisterAs(){
        return view('auth.register');
    }

    public function showStudentRegister(){
        return view('auth.studentRegister');
    }
}


