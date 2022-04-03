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
        'CoursePicture',
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

    

    
}
