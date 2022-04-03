<?php

namespace App\Http\Controllers;

use App\Models\SocialProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function redirect($driver)
    {
        $drivers = ['facebook', 'google'];
        if (in_array($driver, $drivers)) {
            return Socialite::driver($driver)->redirect();
        } else {
            return redirect()->route('login')->with('info', 'no registramos la red social ingresada');
        }
    }
    public function user(Request $request, $driver)
    {
        if ($request->get('error')) {
            return view('auth.login');
        }

        $usersocialite = Socialite::driver($driver)->user();
        if ($usersocialite->getEmail() == null) {
            return redirect()->route('login')->with('info', 'Esta cuenta no tiene una direccion de email confirmada');
        }
        
        $socialprofile =  SocialProfile::where('social_id', $usersocialite->getId())->where('social_name', $driver)->first();
        if (!$socialprofile) {
            $user = User::where('email', $usersocialite->getEmail())->first();
            if (!$user) {
                $user = User::create([
                    'name' => $usersocialite->getName(),
                    'email' => $usersocialite->getEmail(),
    
                ]);
            }
            SocialProfile::create([
                'user_id' => $user->id,
                'social_id' => $usersocialite->getId(),
                'social_name' => $driver,
                'social_avatar' => $usersocialite->getAvatar()
            ]);
        }
        auth()->login($socialprofile->user);
        return redirect()->route('posts.index');
    }
}
