<?php

namespace App\Http\Controllers;
use \app\Models\Category;
use \app\Models\Courses;
use Illuminate\Http\Request;
use Auth;



class ContentCreatorController extends Controller
{
    public $category, $courses; 

    public function __construct(){
            $this->category= new Category();
            $this->courses= new Courses();
    }
    
    public function requestUploadContent(){
        return view('contentCreator.addContent');
    }

    public function writeArticle(){
        return view('contentCreator.writeArticle');
    }

    public function addCourse(){
        return view('contentCreator.addCourse', ['courses'=> $this->courses->getCoursesByInstructor(Auth::guard('contentCreator')->user()->id)]);
    }

    public function courseBuilder(){
        return view('contentCreator.courseBuilder', ['categories' => $this->category->getAll()]);
    }

    public function submitCourse(Request $request){
        $course = Courses::create([
            'CourseName' => $request['courseName'],
            'CategoryID' => $request['courseCategory'],
            'CoursePrice' => $request['coursePrice'],
            'CourseInstructorID' => $request['currentUserID'],
            'CoursePicture' => $request['coursePicture'],
            'duration' => $request['courseDuration'] . $request['duration'],
            'certificate' => $request['certificate'],
            'lang' => $request['language'],
            'skills' => $request['skills'],
            'courseDesc' => $request['courseDescription'],
            'whatWillILearn' => $request['whatWillILearn'],
            'learningOutcomes' => $request['learningOutcomes'],
        ]);
        return redirect('/contentCreator/addCourse');
    }
}
