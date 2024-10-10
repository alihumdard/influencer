<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('admin.index');
        } else {
            return view('pages.select-type');
        }
    }

    public function login($role = null)
    {
        if (!$role || !in_array($role, ['brand', 'influencer'])) {
            return redirect()->back()->withErrors(['role' => 'Invalid or missing role.']);
        }

        if ($role === 'brand') {
            return view('pages.auth.login_brand', [$role]);
        } elseif ($role === 'influencer') {
            return view('pages.auth.login_influencer', [$role]);
        }

        return redirect()->back();
    }

    public function logout(Request $request)
    {
        Auth::logout(); 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home')->with('success', 'Logged out successfully.');
    }
}
