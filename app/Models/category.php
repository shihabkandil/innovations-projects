<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    

  use HasFactory;

  protected $guarded = [];

  public function __construct(){
          
  }

  public function courses(){
    return $this->belongsToMany(Courses::class);
  }

  public function getAll(){ 
    return Category::all(); 
  }
}
