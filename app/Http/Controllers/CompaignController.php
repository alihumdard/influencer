<?php

namespace App\Http\Controllers;

use App\Models\Compaign;
use App\Models\CompaignProduct;
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
        $request->validate([
            'campaign_name' => 'required|string|max:255',
            'influencer_type' => 'required|string',
            'gender' => 'required',
            'campaign_description' => 'required|string',
            'campaign_banner' => 'nullable|image|max:2048',
        ]);

        $currentStep = $request->input('current_step');

        $campaignDetail = Compaign::where('is_draft', 1)->first();
        // If no draft exists, create a new one
        if (!$campaignDetail) {
            $campaignDetail = new Compaign();
            $campaignDetail->is_draft = 1; // Set to draft
        }

        switch ($currentStep) {
            case 1:
                $campaignBannerPath = $request->file('campaign_banner') ? $request->file('campaign_banner')->store('campaign_banners') : null;
                if ($request->campaign_banner) {
                    $imageName = $request->campaign_banner->getClientOriginalName();
                    $request->campaign_banner->move(public_path('images'), $imageName);
                }

                $campaignDetail->name = $request->campaign_name;
                $campaignDetail->banner = $imageName ?? NULL;
                $campaignDetail->influencer_type = $request->influencer_type;
                $campaignDetail->gender = $request->gender;
                $campaignDetail->description = $request->campaign_description;
                $campaignDetail->is_draft = 1;
                $campaignDetail->created_by = Auth::user()->id;

                $campaignDetail->save();

                break;
            case 2:
                $campaignDetail->promotion_type = $request->promotion_type;
                $campaignDetail->platform = $request->platform;
                $campaignDetail->regions = json_encode($request->region);
                $campaignDetail->languages = json_encode($request->language);
                $campaignDetail->updated_by = Auth::user()->id;

                $campaignDetail->save();
                break;
            case 3:
                $productNames = $request->input('product_name');
                $productImages = $request->file('product_image');

                foreach ($productNames as $key => $productName) {
                    $campaignProducts = new CompaignProduct();
                    $campaignProducts->compaign_id = $campaignDetail->id;
                    $campaignProducts->name = $productName;

                    // Handle product image upload
                    if (isset($productImages[$key])) {
                        $imageName = $productImages[$key]->getClientOriginalName();
                        $productImages[$key]->move(public_path('images'), $imageName);
                        $campaignProducts->image = $imageName;
                    } else {
                        $campaignProducts->image = null; // Set to null if no image is provided
                    }

                    $campaignProducts->created_by = Auth::user()->id;
                    $campaignProducts->save();
                }

                $campaignDetail->is_draft = 0;
                $campaignDetail->updated_by = Auth::user()->id;
                $campaignDetail->save(); // Make sure to save the campaign detail

                break;
            default:
                return response()->json(['message' => 'Invalid step'], 400);
        }

        return response()->json(['message' => 'Step saved successfully!']);
    }
}
