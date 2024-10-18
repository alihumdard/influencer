<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class GoogleAuthController extends Controller
{
    protected $role;

    public function google_brand()
    {
        $this->role = user_roles(2);
        return $this->redirectToGoogle($this->role);
    }

    public function google_influen()
    {
        $this->role = user_roles(3);
        return $this->redirectToGoogle($this->role);
    }
    
    public function redirectToGoogle($role = null)
    {
        session(['role' => $role]);
        return Socialite::driver('google')
        ->scopes(['openid', 'profile', 'email'])
        ->redirect();

    }

    public function handleGoogleCallback()
    {
        try {

            $googleUser = Socialite::driver('google')->user();
            $role = session('role');

            $user = User::where('google_email', $googleUser->getEmail())->first();

            if (!$user) {
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'google_email' => $googleUser->getEmail(),
                    'google_profile_url' => $googleUser->getAvatar(),
                    'role' => $role,
                    'password' => Hash::make(Str::random(8)),
                ]);
            }
            if($user){
                Auth::login($user);
                if (Auth::check()) {
                    return redirect()->route('admin.index');
                } else {

                return redirect()->route('login', ['role' => 'brand'])->withErrors(['msg' => 'Something went wrong with Google authentication.']);
                }
            }else{
                return redirect()->route('login', ['role' => 'brand'])->withErrors(['msg' => 'Something went wrong with Google authentication.']);
            }

            } catch (\Exception $e) {
                dd($e);
                return redirect()->route('login', ['role' => 'brand'])->withErrors(['msg' => 'Something went wrong with Google authentication.']);
            }
    }
}
