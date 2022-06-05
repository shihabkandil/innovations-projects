<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'student';
    protected $table = 'students';

        protected $fillable = [
            'name', 'email', 'password', 'facebook_id','google_id','address','city','state','zip_code'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        static public function getStudent($id){ 
            return Student::where('id', 'LIKE', $id)->get(); 
        }

        public function orders(){
            return $this->belongsToMany(Order::class);
        }
        static public function getall(){ 
            return Student::all(); 
        }
}
