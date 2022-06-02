<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
  
  use HasFactory;

  protected $table ='categories'; 
  protected $guarded = [];

  public function __construct(){
          
  }

  public function courses(){
    return $this->belongsToMany(Courses::class);
  }

  public function getAll(){ 
    return CategoryModel::all(); 
  }
}
