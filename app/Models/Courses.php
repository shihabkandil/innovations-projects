<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'CourseName',
        'CategoryID',
        'CoursePrice',
        'CourseInstructorID',
        'CoursePicture',
        'duration',
        'certificate',
        'lang',
        'skills',
        'courseDesc',
        'whatWillILearn',
        'learningOutcomes',
        'approved',
    ];

    public  function  getCategoryID($id){ 
        return Courses::where('CategoryID', 'LIKE', $id)->get(); 
    }

    public function getAll(){
        return Courses::all(); 
    }

    public function getCourse($id){
        return Courses::findOrFail($id);
    }

    public function getCoursesByInstructor($id){
        return Courses::where('CourseInstructorID', '=' , $id)->get(); 
    }

    public function checkCourseInstructor($courseID, $instructorID){
       return Courses::where('id', '=' , $courseID)->where('CourseInstructorID', '=' , $instructorID)->exists();
    }

    public function getnotapproved(){
        return Courses::where('approved', '=' ,'0')->get(); 
    }
    
}
