<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'courseId',
        'name',
        'body',
        'prerequisiteLesson',
    ];
    
    public function getCourseLessons($id){
        return Lesson::where('courseId', 'LIKE', $id)->get();
    }
}
