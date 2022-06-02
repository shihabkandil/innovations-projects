<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'studentID',
        'courseID',
    ];

    public function getStudentCourses($id){
        return Enrollment::where('studentID', '=' , $id)->get(['courseID']);
    }
    
    public function checkCourseStudent($courseID, $studentID){
        return Enrollment::where('courseID', '=' , $courseID)->where('studentID', '=' , $studentID)->exists();
    }

}
