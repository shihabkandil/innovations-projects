<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SocialController extends Controller
{
    public function redirect(){
        return Socialite::driver('facebook') -> redirect();
    }

    public function callback(){
        try{
            $user = Socialite::driver('facebook') -> user();

            $saveUser = User::updateOrCreate([
                'facebook_id' => $user->getId(),
            ],[
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => Hash::make($user->getId())
            ]);
     
            Auth::loginUsingId($saveUser->id);
    
            return redirect()->route('home');
        }
        catch(Exception $e){
            return redirect()->route('home');
        }
    }
}
