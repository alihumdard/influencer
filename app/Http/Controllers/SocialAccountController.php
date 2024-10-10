<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use App\Models\SocialAccount;
use App\Models\InfluencerDetail;

class SocialAccountController extends Controller
{
    public function socail_insta_detials()
    {
        $user = Auth::user();
        $data['id'] = SocialAccount::where('user_id', $user->id)
            ->where('platform', 'instagram')
            ->latest('created_at')
            ->value('id');
        return view('pages.influencers.infu-detail', $data);
    }

    public function socail_yt_detials()
    {
        $user = Auth::user();
        $data['id'] = SocialAccount::where('user_id', $user->id)
            ->where('platform', 'youtube')
            ->latest('created_at')
            ->value('id');
        return view('pages.influencers.yt-detail', $data);
    }

    public function insta_detials_store(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'id' => 'required|exists:social_accounts,id',
            'influencer_type' => 'nullable|array|max:3',
            'influencer_type.*' => 'string|in:content_creator,theme_page,memers',
            'channel_language' => 'required|string',
            'subscriber' => 'required|integer|min:0',
            'category' => 'nullable|array|max:3',
            'category.*' => 'string|in:comedy,meme,decor,wedding,business,automobile',
        ]);

        $data = SocialAccount::find($request->id);

        if (!$data) {
            return redirect()->back()->withErrors(['id' => 'Social account not found']);
        }

        $data->user_id = $user->id;
        $data->influencer_type = json_encode($request->influencer_type);
        $data->channel_language = $request->channel_language;
        $data->subscriber = $request->subscriber;
        $data->category = json_encode($request->category);
        $data->save();

        InfluencerDetail::where('user_id', $user->id)->update([
            'insta_verified' => 'yes',
        ]);

        return redirect()->route('admin.index')->with('success', 'Details saved successfully!');
    }

    public function yt_detials_store(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'id' => 'required|exists:social_accounts,id',
            'influencer_type' => 'nullable|array|max:3',
            'influencer_type.*' => 'string|in:content_creator,theme_page,memers',
            'channel_language' => 'required|string',
            'subscriber' => 'required|integer|min:0',
            'category' => 'nullable|array|max:3',
            'category.*' => 'string|in:comedy,meme,decor,wedding,business,automobile',
        ]);

        $data = SocialAccount::find($request->id);

        if (!$data) {
            return redirect()->back()->withErrors(['id' => 'Social account not found']);
        }

        $data->user_id = $user->id;
        $data->influencer_type = json_encode($request->influencer_type);
        $data->channel_language = $request->channel_language;
        $data->subscriber = $request->subscriber;
        $data->category = json_encode($request->category);
        $data->save();
        InfluencerDetail::where('user_id', $user->id)->update([
            'youtube_verified' => 'yes',
        ]);

        return redirect()->route('admin.index')->with('success', 'Details saved successfully!');
    }
}
