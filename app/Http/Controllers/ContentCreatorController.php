<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\ContentCreator;
use App\Models\Courses;
use App\Models\Lesson;
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

    public function validateCourse($request){
        $request->validate([
            'courseName' => ['required', 'string', 'max:255'],
            'courseCategory' => ['required','integer'],
            'coursePrice' => ['required','integer'],
            'coursePicture'=> ['required','mimes:jpeg,jpg,png,gif|required|max:10000'],
            'courseDuration' => ['required','integer'],
            'duration' => ['required', 'string', 'max:255'],
            'certificate' => ['required', 'string', 'max:255'],
            'language' => ['required', 'string', 'max:255'],
            'skills' => ['required', 'string', 'max:255'],
            'courseDescription' => ['required','string'],
            'whatWillILearn' => ['required','string'],
            'learningOutcomes' => ['required','string'],
        ]);
    }

    public function createLessons(Request $request, Courses $course){
        $name = $request['lessonName'];
        $body = $request['lessonBody'];
        $prevLesson = [];
        $id = $course->id; //id of the course the lessons belong to
        for($i = 0; $i < count($name); $i++){
            if($i == 0){
                $lesson = Lesson::create([
                    'courseId' => $id,
                    'name' => $name[$i],
                    'body' => $body[$i],
                    'prerequisiteLesson' => 0,//the first lesson does not have a prerequisite so its set to 0
                ]);
                array_push($prevLesson, $lesson->id); //first lesson id is pushed to end of array
            }else{
                $lesson = Lesson::create([
                    'courseId' => $course->id,
                    'name' => $name[$i],
                    'body' => $body[$i],
                    'prerequisiteLesson' => end($prevLesson),//the lesson prerequisite is set to the id of the lesson before it 
                ]);                                          //which is at the end of the array
                array_push($prevLesson, $lesson->id); //latest lesson id is pushed to end of array
            }
        }
    }

    public function submitCourse(Request $request){
        ContentCreatorController::validateCourse($request); //validate user input

        $picture = FirestorageController::store($request['coursePicture'], 'Courses/Pictures/'); //upload validated file and get path

        $course = Courses::create([ //create course with validated request and file path
            'CourseName' => $request['courseName'],
            'CategoryID' => $request['courseCategory'],
            'CoursePrice' => $request['coursePrice'],
            'CourseInstructorID' => $request['currentUserID'],
            'CoursePicture' => $picture,
            'duration' => $request['courseDuration'] . $request['duration'],
            'certificate' => $request['certificate'],
            'lang' => $request['language'],
            'skills' => $request['skills'],
            'courseDesc' => $request['courseDescription'],
            'whatWillILearn' => $request['whatWillILearn'],
            'learningOutcomes' => $request['learningOutcomes'],
        ]);

        if($request['lessonName']!=NULL){ //if there are lessons go to createLessons function else go to addCourse page
            ContentCreatorController::createLessons($request, $course);
            return redirect('/contentCreator/addCourse');
        }else{
            return redirect('/contentCreator/addCourse');
        }
    }
}
