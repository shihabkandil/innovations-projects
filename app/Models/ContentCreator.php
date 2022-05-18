<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ContentCreator extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'contentCreator';
    protected $table = 'contentcreators';

        protected $fillable = [
            'name', 'email', 'password', 'cv'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        static public function getall(){ 
            return ContentCreator::all(); 
        }
}








