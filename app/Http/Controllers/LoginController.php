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
        return Socialite::driver($driver)->redirect();
    }
    public function user($driver)
    {
        $usersocialite = Socialite::driver($driver)->user();
        $user = User::where('email', $usersocialite->getEmail())->first();
        if (!$user) {
            $user = User::create([
                'name' => $usersocialite->getName(),
                'email' => $usersocialite->getEmail(),

            ]);
        }
        $socialprofile =  SocialProfile::where('social_id', $usersocialite->getId())->where('social_name',$driver)->first();
        if (!$socialprofile) {
            SocialProfile::create([
                'user_id' => $user->id,
                'social_id' => $usersocialite->getId(),
                'social_name' => $driver,
                'social_avatar' => $usersocialite->getAvatar()
            ]);
        }
        auth()->login($user);
        return redirect()->route('posts.index');
        
    }
}
