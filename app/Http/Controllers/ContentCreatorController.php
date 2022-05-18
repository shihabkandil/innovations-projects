<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentCreatorController extends Controller
{
    
    public function requestUploadContent(){
        return view('contentCreator.addContent');
    }

    public function writeArticle(){
        return view('contentCreator.writeArticle');
    }
}
