<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Saves Article Data in database after submittion
     *
     * @param  array  $data
     */
    public function submitArticle(Request $request){
        $article = Article::create([
            'title' => $request['title'],
            'text' => $request['article'],
            'written_by' => $request['currentUserID']
        ]);
        return redirect('/home');
    }
}
