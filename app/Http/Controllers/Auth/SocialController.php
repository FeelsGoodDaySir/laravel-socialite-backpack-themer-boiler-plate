<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;
use App\Models\User;

class SocialController extends Controller
{
    //
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider) {
        $userSocial = Socialite::driver($provider)->stateless()->user();
        // dd($userSocial);
        $user       = User::where(['email' => $userSocial->getEmail()])->first();

        if ( ! $user) {
            $user = new User;
        }

        $user->provider_id = $userSocial->getId();
        $user->provider    = $provider;

        switch ( $provider ) {
            case 'facebook':
                $user->name  = $userSocial->getName();
                $user->email = $userSocial->getEmail();
                $user->image = $userSocial->getAvatar()."&access_token=$userSocial->token";
                break;
            // case 'instagrambasic':
            //     $user->name  = $userSocial->nickname;
            //     $user->email = $userSocial->user['username'];
            //     $user->image = $userSocial->getAvatar();
            //     break;
            default:
                $user->name  = $userSocial->getName();
                $user->email = $userSocial->getEmail();
                $user->image = $userSocial->getAvatar();
                break;
        }

        $user->save();

        Auth::login($user);

        // dd($_SERVER);

        return redirect()->route('home');
    }
}
