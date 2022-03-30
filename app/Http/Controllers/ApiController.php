<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ApiController extends Controller
{

    private $apiModel;

    public function __construct(){
        $this->apiModel = new ApiModel();
    }

    public function showNews(Request $request)
    {
        $response['news'] = $apiModel->fetchNews();
        return view('/news', $response);
    }
}
