<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function inbox()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = auth()->user();
        if ($user) {
            $page_name = 'settings';
            if (!view_permission($page_name)) {
                return redirect()->back();
            }
            $data['user'] = $user;

            if ($user->role == user_roles('2')) {
                return view('pages.profile.brand', $data);
            } elseif ($user->role == user_roles('3')) {
                return view('pages.profile.influencer', $data);
            }
        } else {
            return redirect()->route('home');
        }
    }
}
