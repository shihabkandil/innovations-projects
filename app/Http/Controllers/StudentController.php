<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Courses;
use App\Models\Enrollment;
use Auth;

class StudentController extends Controller
{
    public $student;
    public $courses;
    public $enrollment;

    public function __construct(){
      
        $this->student= new Student();
        $this->courses= new Courses();
        $this->enrollment= new Enrollment();

    }

    public function quiz(){
        return view('student.quiz');
    }

    public function fetchStudent($id)
    {   
        $student = $this->student->getStudent($id);
        return $student;
    }

    public function editProfile(){
        return view('pages.editProfile');
    }

    public function purchase(){
        
    }

    public function updateStudent(Request $request){
        $request->validate([
            'profilePicture'=> ['required','mimes:jpeg,jpg,png,gif|required|max:10000'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:students,email'],
            'zip' => ['required','integer'],
            'bio' => ['required','string'],
            'address' => ['required','string'],
            'city' => ['required','string'],
            'state' => ['required','string'],
        ]);

        $pp = FirestorageController::store($request->profilePicture, 'Students/');

        $data = Student::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->BIO = $request->bio;
        $data->address = $request->address;
        $data->city = $request->city;
        $data->state = $request->state;
        $data->zip_code = $request->zip;
        $data->PP = $pp;
        $data->save();
        return redirect('/');
    }

    public function studentCourses(){
        return view('student.myCourses', ['courses'=> $this->courses->getCourse($this->enrollment->getStudentCourses(Auth::guard('student')->user()->id))]);
    }
}
