<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\InfluencerDetail;
use App\Models\SocialAccount;
use Illuminate\Support\Facades\Crypt;

class InfluencerController extends Controller
{


    public function account_type($ac_type = null)
    {
        try {
            $account = Crypt::decrypt($ac_type);
        } catch (DecryptException $e) {
            return redirect()->back()->withErrors(['role' => 'Invalid or missing role.']);
        }

        if (!in_array($account, ['instagram', 'youtube'])) {
            return redirect()->back()->withErrors(['role' => 'Invalid or missing role.']);
        }

        if ($account === 'instagram') {
            return view('pages.influencers.add-insta-account', ['account' => $account]);
        } elseif ($account === 'youtube') {
            return view('pages.influencers.add-yt-account', ['account' => $account]);
        }

        return redirect()->back();
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'influencer_type' => 'required|array|min:1',
            'influencer_type.*' => 'string|in:content_creator,theme_page,memers',
            'channel_language' => 'required|string|in:hindi,english,bhojpuri,marathi',
            'subscriber' => 'required|integer',
            'category' => 'required|array|min:1|max:3',
            'category.*' => 'string|in:comedy,meme,decor,wedding,business,automobile',
        ]);

        InfluencerDetail::create([
            'user_id' => auth()->id(),
            'influencer_type' => json_encode($validatedData['influencer_type']),
            'channel_language' => $validatedData['channel_language'],
            'subscriber' => $validatedData['subscriber'],
            'category' => json_encode($validatedData['category']),
            'created_by' => auth()->id(),
            'updated_by' => auth()->id(),
        ]);

        return redirect()->route('admin.index')->with('success', 'Influencer details saved successfully.');
    }

}
