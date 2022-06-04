<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'text','written_by','approved'
    ];

    static public function getApproved(){
        return Article::where('approved', '=' ,'1')->get(); 
    }

    public function getArticle($id){
        return Article::findOrFail($id);
    }
    
}
