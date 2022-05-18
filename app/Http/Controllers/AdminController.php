<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentCreator;

class AdminController extends Controller
{
    public function viewContentCreators(){
        return view('admin.viewContentCreators',['contentCreators' => ContentCreator::getall()]);
    }
}
