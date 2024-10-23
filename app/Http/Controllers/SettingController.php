<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SocialAccount;
use App\Models\InfluencerDetail;
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
        $user->load('socialAccounts','InfluencerDetail');

        if ($user) {
            $page_name = 'settings';
            if (!view_permission($page_name)) {
                return redirect()->back();
            }
            $data['user'] = $user;

            if ($user->role == user_roles('2')) {
                return view('pages.profile.brand', $data);
            } elseif ($user->role == user_roles('3')) {
                return view('pages.profile.influencer',$data,compact('user'));
            }
        } else {
            return redirect()->route('home');
        }
    }

    public function store_product(Request $request)
    {
        //   return $request;

        $request->validate([
            'name'=>'required',
            'email'=> 'required|email',
            'phone'=>'required',
            'dob'=>'required',
            'gender'=>'required',

        ]);

                $user=auth()->user();
                $user->load('socialAccounts','InfluencerDetail');
                $user->name= $request->name;
                $user->save();
                $user->InfluencerDetail->email=$request->email;
                $user->InfluencerDetail->phone=$request->phone;
                $user->InfluencerDetail->dob=$request->dob;
                $user->InfluencerDetail->gender=$request->gender;
                $user->InfluencerDetail->save();
             return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
