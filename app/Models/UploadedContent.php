<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadedContent extends Model
{
    use HasFactory;

    public static function getFreeID(){
        $id = UploadedContent::create()->id;
        return $id;
    }
}
