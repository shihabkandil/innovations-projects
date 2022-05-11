<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\Student;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SocialController extends Controller
{
    public function redirect($service){
        switch($service){
            case "facebook":
                return Socialite::driver('facebook') -> redirect();
                break;

            case "google":
                return Socialite::driver('google') -> redirect();
                break;

            default:
                break;
        }
    }

    public function callback($service){
        switch($service){
            case "facebook":
                try{
                    $user = Socialite::driver('facebook') -> user();
        
                    $saveUser = Student::updateOrCreate([
                        'facebook_id' => $user->getId(),
                    ],[
                        'name' => $user->getName(),
                        'email' => $user->getEmail(),
                        'password' => Hash::make($user->getId())
                    ]);
             
                    Auth::guard('student')->login($saveUser);
            
                    return redirect()->route('home');
                }
                 catch(Exception $e){
                    return redirect()->route('home');
                }
                break;

            case "google":
                try{
                    $user = Socialite::driver('google') -> user();
        
                    $saveUser = Student::updateOrCreate([
                        'email' => $user->getEmail(),
                    ],[
                        'name' => $user->getName(),
                        'password' => Hash::make($user->getId())
                    ]);
             
                    Auth::guard('student')->login($saveUser);
            
                    return redirect()->route('home');
                }
                 catch(Exception $e){
                    return redirect()->route('home');
                }
                break;

            default:
                break;
        }

        
    }
}
