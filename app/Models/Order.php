<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function students(){
        return $this->belongsToMany(Student::class);
    }

    public function courses(){
        return $this->belongsToMany(Courses::class)->withPivot('quantity');
    }


}
