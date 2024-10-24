<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Post;
use App\Models\Product;
use App\Models\Reel;
use App\Models\Story;
use App\Models\Video;
use App\Models\Compaign;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\CompaignProduct;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CompaignController extends Controller
{
    public function create_compaign()
    {
        $userId = Auth::user()->id;
        $categories = Category::all();
        $compaign = Compaign::where('is_draft', 1)->where('created_by', $userId)->with('products')->first();

        return view('pages.compaign.create_compaign', compact('categories', 'compaign'));
    }

    public function store_compaign_setp_1(Request $request)
    {
        $request->validate([
            'campaign_name' => 'required|string|max:255',
            'influencer_type' => 'required|string',
            'gender' => 'required',
            'campaign_description' => 'required|string',
            'campaign_banner' => 'image|mimes:jpeg,png,jpg,gif,webm,svg,webp',
        ]);

        $campaign_banner_path = null;
        if ($request->hasFile('campaign_banner')) {
            $copaignImage = $request->file('campaign_banner');
            $copaignImageName = time() . '_' . uniqid('', true) . '.' . $copaignImage->getClientOriginalExtension();
            $copaignImage->storeAs('campaign/campaign_banner', $copaignImageName, 'public');
            $campaign_banner_path = 'campaign/campaign_banner/' . $copaignImageName;
        }

        $campaignData = [
            'name' => $request->campaign_name,
            'banner' => $campaign_banner_path,
            'influencer_type' => $request->influencer_type,
            'gender' => $request->gender,
            'description' => $request->campaign_description,
            'is_draft' => 1,
            'created_by' => auth()->id(),
            'promotion_type' => $request->promotion_type,
            'platform' => $request->platform,
            'regions' => json_encode($request->regions),
            'languages' => json_encode($request->languages),
            'follower_ranges' => json_encode($request->follower_ranges),
        ];

        $campaign = Compaign::create($campaignData);
        if ($campaign) {
            $campaign->update(['current_step' => 2]);
            return response()->json([
                'status' => 'success',
                'message' => 'Step 1 saved successfully!',
                'campaign_id' => $campaign->id,
                'current_step' => $campaign->current_step,
            ]);
        }

        return response()->json(['status' => 'error', 'message' => 'Failed to save the campaign.']);
    }

    public function store_compaign_setp_2(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:compaigns,id',
            'promotion_type' => 'required|string',
            'platform' => 'required|string',
            'region' => 'array',
            'language' => 'array',
        ]);
        $campaign = Compaign::findOrFail($request->id);
        $campaign->update([
            'promotion_type' => $request->promotion_type,
            'platform' => $request->platform,
            'regions' => json_encode($request->region),
            'languages' => json_encode($request->language),
            'current_step' => 3,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Step 2 saved successfully!',
            'campaign_id' => $campaign->id,
            'current_step' => $campaign->current_step,
        ]);
    }

    public function store_reel(Request $request)
    {
        $request->validate([
            'campaign_id' => 'required|exists:campaigns,id',
            'reel_type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'instagram_page' => 'required|string|max:255',
            'tags' => 'nullable|string',
            'script' => 'nullable|string',
            'campaign_banner' => 'image|mimes:jpeg,png,jpg,gif,webm,svg,webp',
        ]);

        if ($request->hasFile('campaign_banner')) {
            $fileName = time() . '_' . $request->file('campaign_banner')->getClientOriginalName();
            $request->file('campaign_banner')->storeAs('uploads/reels', $fileName);
        } else {
            $fileName = null;
        }

        $reel = Reel::create([
            'campaign_id' => $request->campaign_id,
            'reel_type' => $request->reel_type,
            'description' => $request->description,
            'instagram_page' => $request->instagram_page,
            'tags' => $request->tags,
            'script' => $request->script,
            'campaign_banner' => $fileName,
            'created_by' => auth()->id(),
            'updated_by' => auth()->id(),
        ]);

        return response()->json(['status' => 'success', 'reel' => $reel]);
    }

    public function store_compaign_old(Request $request)
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
            $campaignDetail->name = $request->campaign_name;
            $campaignDetail->name = $request->campaign_name;
            $campaignDetail->campaign_banner = $request->campaign_banner;
            $campaignDetail->influencer_type = $request->influencer_type;
            $campaignDetail->gender = $request->gender;
            $campaignDetail->campaign_description = $request->campaign_description;
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

                dd($campaignDetail);
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

    public function store_compaign_reel(Request $request)
    {

        $request->validate([
            'campaign_id' => 'required',
            'reel_type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'instagram_page' => 'required|string|max:255',
            'tags' => 'nullable|string',
            'script' => 'nullable|string',
        ]);

        $reel = Reel::create([
            'campaign_id' => $request->campaign_id,
            'reel_type' => $request->reel_type,
            'description' => $request->description,
            'instagram_page' => $request->instagram_page,
            'tags' => $request->tags,
            'script' => $request->script,
            'created_by' => Auth::user()->id,
        ]);

        $compaign = Compaign::find($request->campaign_id);
        $compaign->update([
            'is_draft' => 2,
            'current_step' => 4,
            'updated_by' => Auth::user()->id,
        ]);


        return response()->json(['status' => 'success', 'reel' => $reel]);
    }

    public function store_compaign_story(Request $request)
    {

        $request->validate([
            'campaign_id' => 'required',
            'story_type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'instagram_page' => 'required|string|max:255',
            'tags' => 'nullable|string',
            'script' => 'nullable|string',
        ]);

        $story = Story::create([
            'campaign_id' => $request->campaign_id,
            'story_type' => $request->story_type,
            'description' => $request->description,
            'instagram_page' => $request->instagram_page,
            'tags' => $request->tags,
            'script' => $request->script,
            'created_by' => Auth::user()->id,
        ]);

        $compaign = Compaign::find($request->campaign_id);
        $compaign->update([
            'is_draft' => 2,
            'current_step' => 4,
            'updated_by' => Auth::user()->id,
        ]);

        return response()->json(['status' => 'success', 'story' => $story]);
    }

    public function store_compaign_video(Request $request)
    {

        $request->validate([
            'campaign_id' => 'required',
            'video_type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'instagram_page' => 'required|string|max:255',
            'tags' => 'nullable|string',
            'script' => 'nullable|string',
        ]);

        $video = Video::create([
            'campaign_id' => $request->campaign_id,
            'video_type' => $request->video_type,
            'description' => $request->description,
            'instagram_page' => $request->instagram_page,
            'tags' => $request->tags,
            'script' => $request->script,
            'created_by' => Auth::user()->id,
        ]);

        $compaign = Compaign::find($request->campaign_id);
        $compaign->update([
            'is_draft' => 2,
            'current_step' => 4,
            'updated_by' => Auth::user()->id,
        ]);

        return response()->json(['status' => 'success', 'video' => $video]);
    }

    public function store_compaign_post(Request $request)
    {

        $request->validate([
            'campaign_id' => 'required',
            'post_type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'instagram_page' => 'required|string|max:255',
            'tags' => 'nullable|string',
            'script' => 'nullable|string',
        ]);

        $post = Post::create([
            'campaign_id' => $request->campaign_id,
            'post_type' => $request->post_type,
            'description' => $request->description,
            'instagram_page' => $request->instagram_page,
            'tags' => $request->tags,
            'script' => $request->script,
            'created_by' => Auth::user()->id,
        ]);

        $compaign = Compaign::find($request->campaign_id);
        $compaign->update([
            'is_draft' => 2,
            'current_step' => 4,
            'updated_by' => Auth::user()->id,
        ]);

        return response()->json(['status' => 'success', 'post' => $post]);
    }

    public function store_compaign_logo(Request $request)
    {

        $request->validate([
            'campaign_id' => 'required',
            'logo_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'tags' => 'nullable|string',
        ]);

        $logo = Logo::create([
            'campaign_id' => $request->campaign_id,
            'logo_name' => $request->logo_name,
            'tags' => $request->tags,
            'payment' => $request->payment,
            'description' => $request->description,
            'created_by' => Auth::user()->id,
        ]);

        $compaign = Compaign::find($request->campaign_id);
        $compaign->update([
            'is_draft' => 2,
            'current_step' => 4,
            'updated_by' => Auth::user()->id,
        ]);

        return response()->json(['status' => 'success', 'logo' => $logo]);
    }

    public function delete_draft_compaign($id)
    {
        // Find the draft campaign by its ID and delete it
        $campaign = Compaign::find($id);

        if ($campaign && $campaign->is_draft) {
            $campaign->delete();

            return response()->json(['success' => true, 'message' => 'Draft campaign deleted successfully.']);
        }

        return response()->json(['success' => false, 'message' => 'Draft campaign not found.']);
    }

    public function create_new_category(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $slug = Str::slug($request->name);

        $category = Category::create([
            'title' => $request->name,
            'slug' => $slug,
        ]);

        $option = '<option value="' . $category->id . '" selected>' . $category->title . '</option>';

        if ($category) {
            return response()->json(['success' => true, 'option' => $option, 'message' => 'Category created successfully.']);
        }
    }
}
