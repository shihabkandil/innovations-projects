<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsApiModel;

class NewsApiController extends Controller
{
    private $apiModel;

    public function __construct(){
        $this->apiModel = new NewsApiModel();
    }

    public function showNews(Request $request)
    {
        $response['news'] = $this->apiModel->fetchNews();
        return view('api.news', $response);
    }
}
