<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SocialController extends Controller
{
    public function redirect($service){
        return Socialite::driver($service) -> redirect();
    }

    public function callback($service){
        try{
            $user = Socialite::driver($service) -> user();

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
