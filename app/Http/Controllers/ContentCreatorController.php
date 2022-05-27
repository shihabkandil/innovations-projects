<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ContentCreatorController extends Controller
{
    public $category; 

    public function __construct(){
            $this->category= new Category();
    }
    
    public function requestUploadContent(){
        return view('contentCreator.addContent');
    }

    public function writeArticle(){
        return view('contentCreator.writeArticle');
    }

    public function addCourse(){
        return view('contentCreator.addCourse');
    }

    public function courseBuilder(){
        return view('contentCreator.courseBuilder',['categories' => $this->category->getAll()]);
    }
}
