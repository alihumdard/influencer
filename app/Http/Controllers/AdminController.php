<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\BusinessType;
use App\Models\BrandType;
use App\Models\BrandDetail;
use App\Models\InfluencerDetail;
use App\Models\SocialAccount;



class AdminController extends Controller
{
    protected $status;
    protected $user;

    public function __construct()
    {
        $this->user = auth()->user();
        $this->status = config('constants.USER_STATUS');
    }

    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = auth()->user();
        if ($user) {
            $page_name = 'dashboard';
            if (!view_permission($page_name)) {
                return redirect()->back();
            }

            $data['user'] = $user;

            // User roles: 1 for Super_Admin, 2 for Brand, 3 for Influencer
            if ($user->role == user_roles('1')) {
                return view('pages.dashboards.admin', $data);
            } elseif ($user->role == user_roles('2')) {
                $brand = BrandDetail::where('user_id', $user->id)->first();
                $data['brand_types'] = BrandType::all();
                $data['business_types'] = BusinessType::all();
                if ($brand) {
                    $data['brand'] = $brand;
                    if (!$brand->address_1) {
                        return view('pages.brands.brand-detail', $data);
                    } elseif ($brand->phone_verified == 'no') {
                        return view('pages.brands.verify_phone', $data);
                    } elseif ($brand->email_verified == 'no') {
                        return view('pages.brands.verify_email', $data);
                    } elseif ($brand->whatsapp_verified == 'no') {
                        return view('pages.brands.verify_whatsapp', $data);
                    } elseif ($brand->email_verified == 'yes' && $brand->email_verified == 'yes' && !empty($brand->address_1)) {
                        return view('pages.dashbords.brand', $data);
                    } else {
                        return view('pages.brands.brand-detail', $data);
                    }
                } else {

                    return view('pages.brands.brand-detail', $data);
                }
                return view('pages.dashboards.brand', $data);
            } elseif ($user->role == user_roles('3')) {
                $influencer = InfluencerDetail::where('user_id', $user->id)->first();
                if ($influencer) {
                    $data['influencer'] = $influencer;
                    if ($influencer->phone_verified == 'yes') {
                        if ($influencer->insta_verified == 'yes' && $influencer->youtube_verified == 'yes' && $influencer->whatsapp_verified == 'yes') {
                            return view('pages.dashbords.influencer', $data);
                        }
                        elseif ($influencer->insta_verified == 'yes' && $influencer->youtube_verified == 'yes') {
                            return view('pages.influencers.verify_whatsapp', $data);
                        } else {
                            if ($influencer->insta_verified == 'yes') {
                                $data['instagrams'] = SocialAccount::where('user_id', $user->id)->where('platform', 'instagram')->pluck('username');
                            }
                            if ($influencer->youtube_verified == 'yes') {
                                $data['youtubes'] = SocialAccount::where('user_id', $user->id)->where('platform', 'youtube')->pluck('username');
                            }
                            return view('pages.influencers.link-account', $data);
                        }
                    } else {
                        return view('pages.influencers.verify_phone');
                    }
                } else {
                    return view('pages.influencers.verify_phone');
                }

            }
        } else {
            return redirect()->route('home');
        }
    }

    public function webDashboard()
    {


        $mobile_verification = InfluencerDetail::where('google_email', $google_email)->value('mobile_verified_at');

        $influencer_id = InfluencerDetail::where('google_email', $google_email)->value('id');
        $insta_count = InfluencerInstaDetail::where('influencer_id', $influencer_id)->count();
        $youtube_count = InfluencerYoutubeDetail::where('influencer_id', $influencer_id)->count();
        if ($mobile_verification == 'not verified') {
            return view('webapp.influencer.number_verification')->with(['influencer_id' => $influencer_id]);
        } else if ($insta_count === 0 && $youtube_count === 0) {
            return redirect()->route('web.social_page'); // Replace 'your.route.name' with the actual route name you want to redirect to
        } else {
            return redirect()->route('home');
        }
    }
}
