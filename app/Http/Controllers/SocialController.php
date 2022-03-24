<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SocialController extends Controller
{
    public function redirect($service){
        return Socialite::driver($service) -> redirect();
    }

    public function callback($service){
        $user = Socialite::with($service) -> stateless() -> user();

        $saveUser = User::updateOrCreate([
            'facebook_id' => $user->getId(),
        ],[
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => Hash::make($user->getName().'@'.$user->getId())
             ]);
 
        Auth::loginUsingId($saveUser->id);

        return redirect()->route('home');
    }
}
