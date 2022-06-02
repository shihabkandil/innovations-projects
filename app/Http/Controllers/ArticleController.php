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

    public function showArticles()
    {
        $data =  Article::where('approved', '=' ,'0')->get(); 
        return view('admin.Article',['id'=>$data] );
    }

    public function updateArticle(Request $request)
    {
        $Article = Article::find($request["articleID"]);
        $Article->approved = 1;
        $Article->update();
        return redirect('/dashboardAdminArticles');
    }
    
}
