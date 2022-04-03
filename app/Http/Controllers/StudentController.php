<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function quiz(){
        return view('student.quiz');
    }

    
    
}
