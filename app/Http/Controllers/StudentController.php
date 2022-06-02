<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function __construct(){
        $this->student= new Student();
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

    public function purchase(){
        
    }

    public function updateStudent(Request $req){
        $data = Student::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->BIO = $req->BIO;
        $data->save();
        return redirect('/');
    }
}
