<?php

namespace App\Http\Controllers;

use App\Models\Compaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompaignController extends Controller
{
    public function create_compaign()
    {
        return view('pages.compaign.create_compaign');
    }

    public function store_compaign(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'campaign_name' => 'required|string|max:255',
            // 'campaign_banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'influencer_type' => 'required',
            'gender' => 'required|string',
            'campaign_description' => 'required|string|max:1000',
            'promotion_type' => 'required|string|in:paid,barter,paid+barter',
            'platform' => 'required|in:instagram,youtube',
            'region' => 'required',
            'language' => 'required',
        ]);

        // Handle file uploads
        $campaignBannerPath = $request->file('campaign_banner') ? $request->file('campaign_banner')->store('campaign_banners') : null;
        if ($request->campaign_banner) {
            $imageName = $request->campaign_banner->getClientOriginalName();
            $request->campaign_banner->move(public_path('images'), $imageName);
        }

        // Create campaign
        $campaignDetail = new Compaign();
        $campaignDetail->name = $request->campaign_name;
        $campaignDetail->banner = $imageName ?? NULL;
        $campaignDetail->influencer_type = $request->influencer_type;
        $campaignDetail->gender = $request->gender;
        $campaignDetail->description = $request->campaign_description;
        $campaignDetail->promotion_type = $request->promotion_type;
        $campaignDetail->platform = $request->platform;
        $campaignDetail->regions = json_encode($request->region);
        $campaignDetail->languages = json_encode($request->language);
        $campaignDetail->created_by = Auth::user()->id;


        $campaignDetail->save();

        return response([
            'validation_error' => false,
            'error' => false,
            'message' => 'Campaign Created Successfully',
            'campaign_detail' => $campaignDetail,
            'status' => 200
        ], 200);
    }
}
