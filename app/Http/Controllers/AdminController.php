<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentCreator;

class AdminController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.AdminLogin');
    }

    
    public function viewContentCreators(){
        return view('admin.viewContentCreators',['contentCreators' => ContentCreator::getall()]);
    }
}
