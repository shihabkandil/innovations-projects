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

    public function editProfile($id){
        return view('pages.editProfile', ['id'=>$id] )->with(array('student'=>$this->fetchStudent($id)));
    }

    public function updateStudent(Request $req){
        $data = Student::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->BIO = $req->BIO;
        $data->save();
        return redirect('/');
    }

    public function studentCourses(){
        return view('student.myCourses', ['courses'=> $this->courses->getCourse($this->enrollment->getStudentCourses(Auth::guard('student')->user()->id))]);
    }
}
