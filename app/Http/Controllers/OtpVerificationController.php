<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use App\Mail\OtpVerificationMail;
use App\Models\BrandDetail;
use App\Models\InfluencerDetail;
use App\Models\OtpVerification;
use App\Models\SocialAccount;


class OtpVerificationController extends Controller
{

    public function brand_otp($otp_type)
    {
        $data['otp_type'] = Crypt::decryptString($otp_type);
        return view('pages.brands.otp', $data);
    }

    public function socail_otp($ac_type)
    {
        try {
            $decryptedAcType = Crypt::decryptString($ac_type);
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return redirect()->back()->withErrors(['socail_ac' => 'Invalid social account type']);
        }

        $user = Auth::user();
        $data['otp'] = OtpVerification::where(['user_id' => $user->id, 'otp_type' => $decryptedAcType])->orderBy('id', 'desc')->value('otp_code');

        if ($decryptedAcType === 'instagram') {
            return view('pages.influencers.insta-otp', $data);
        } elseif ($decryptedAcType === 'youtube') {
            return view('pages.influencers.yt-otp', $data);
        } elseif ($decryptedAcType === 'whatsapp') {
            return view('pages.influencers.wt-otp', $data);
        } else {
            // Handle other social account types or show an error
            return redirect()->back()->withErrors(['socail_ac' => 'Unsupported social account type']);
        }
    }

    public function verify_socal_otp(Request $request)
    {
        $rules = [
            'platform' => 'required|string',
            'username' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $otp_type = $request->platform;
        $otp_code = random_int(10000, 99999);

        OtpVerification::create([
            'user_id' => auth()->id(),
            'otp_type' => $otp_type,
            'otp_code' => $otp_code,
            'created_by' => auth()->id(),
        ]);

        if ($request->platform == 'instagram') {
            $socialAccount = new SocialAccount();
            $socialAccount->user_id = auth()->id();
            $socialAccount->platform = $request->platform;
            $socialAccount->username = $request->username;
            $socialAccount->created_by = auth()->id();
            $socialAccount->save();
        }

        if ($request->platform == 'youtube') {
            $socialAccount = new SocialAccount();
            $socialAccount->user_id     = auth()->id();
            $socialAccount->platform    = $request->platform;
            $socialAccount->username    = $request->username;
            $socialAccount->profile_url = $request->profile_url ?? '';
            $socialAccount->created_by  = auth()->id();
            $socialAccount->save();
        }

        $encryptedAcType = Crypt::encryptString($request->platform);
        return redirect()->route('socail.otp', [$encryptedAcType]);
    }

    public function verify_otp(Request $request)
    {
        $user = Auth()->user();
        $entered_otp = implode('', $request->otp);

        $validator = Validator::make($request->all(), [
            'otp.*' => 'required|digits:1|numeric',
            'otp_type' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $server_otp = OtpVerification::where(['user_id' => $user->id, 'otp_type' => $request->otp_type])->orderBy('id', 'desc')->value('otp_code');
        if ($user->role == user_roles('2')) {
            if ($server_otp == $entered_otp) {
                BrandDetail::where('user_id', $user->id)->update([
                    '' . $request->otp_type . '_verified' => 'yes',
                ]);
                return redirect()->route('admin.index')->with('success', 'Your account has been verified.');
            } else {
                return redirect()->back()->withErrors(['otp' => 'OTP does not match'])->withInput();
            }
        }
        if ($user->role == user_roles('3')) {
            if ($server_otp == $entered_otp) {
                InfluencerDetail::where('user_id', $user->id)->update([
                    '' . $request->otp_type . '_verified' => 'yes',
                ]);
                return redirect()->route('admin.index')->with('success', 'Your account has been verified.');
            } else {
                return redirect()->back()->withErrors(['otp' => 'OTP does not match'])->withInput();
            }
        }
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $validator = Validator::make($request->all(), [
            'phone' => 'required|numeric|digits:10'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $phone_otp = random_int(10000, 99999);

        $phone = $request->phone;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=c05Fga2s28vdnjfCBOQwia98aze7zuEgaq5iL1QJtVCvg9gpOjh1vUL6Xion&variables_values=$phone_otp&route=otp&numbers=" . urlencode($phone),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        if ($response === false) {
            echo 'Curl error: ' . curl_error($curl);
        } else {
            $result = json_decode($response, true);
            if (isset($result['return']) && $result['return'] === true) {

                OtpVerification::create([
                    'user_id' => auth()->id(),
                    'otp_type' => 'phone',
                    'otp_code' => $phone_otp,
                    'created_by' => auth()->id(),
                ]);

                if ($request->brand_id) {
                    if (auth()->user()->role == user_roles('2')) {
                        BrandDetail::where('id', $request->brand_id)->update([
                            'phone' => $request->phone,
                        ]);
                    }
                }

                if ($request->influencer_id) {
                    if (auth()->user()->role == user_roles('2')) {
                        InfluencerDetail::where('id', $request->influencer_id)->update([
                            'phone' => $request->phone,
                        ]);
                    }
                }

                $encryptedOtpType = Crypt::encryptString('phone');
                return redirect()->route('brand.otp', ['otp_type' => $encryptedOtpType])
                    ->with('success', 'OTP has been sent to your email.');
            } else {
                if (isset($result['error_code'])) {
                    return redirect()->back()->withErrors('Failed to send message: ' . $result['error_message']);
                } else {
                    return redirect()->back()->withErrors('Failed to send message due to unknown error.' . $err);
                }
            }
        }
    }

    public function store_email(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $email = $request->email;
        $email_otp = random_int(10000, 99999);
        $user = auth()->user();

        try {
            Mail::to($email)->send(new OtpVerificationMail($email_otp));

            OtpVerification::create([
                'user_id' => $user->id,
                'otp_type' => 'email',
                'otp_code' => $email_otp,
                'created_by' => $user->id,
            ]);

            BrandDetail::where('user_id', $user->id)->update([
                'email' => $request->email,
            ]);

            $encryptedOtpType = Crypt::encryptString('email');
            return redirect()->route('brand.otp', ['otp_type' => $encryptedOtpType])
                ->with('success', 'OTP has been sent to your email.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Failed to send OTP due to internal error: ' . $e->getMessage());
        }
    }

    public function store_whatsapp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'whatsapp' => 'required|numeric|digits:10'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        if ($request->brand_id) {
            if (auth()->user()->role == user_roles('2')) {
                BrandDetail::where('id', $request->brand_id)->update([
                    'whatsapp' => $request->whatsapp,
                    'whatsapp_verified' => 'yes',
                ]);
            }
        }
        return redirect()->route('admin.index')->with('success', 'Your account has been verified.');
    }

    public function whatsapp_verified(Request $request)
    {

        if (auth()->user()->role == user_roles('3')) {
            InfluencerDetail::where('user_id', auth()->user()->id)->update([
                'whatsapp_verified' => 'yes',
            ]);
        }
        return redirect()->route('admin.index')->with('success', 'Your account has been verified.');
    }

    public function store_influe_phone(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $validator = Validator::make($request->all(), [
            'phone' => 'required|numeric|digits:10'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $phone_otp = random_int(10000, 99999);
        $phone = $request->phone;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=c05Fga2s28vdnjfCBOQwia98aze7zuEgaq5iL1QJtVCvg9gpOjh1vUL6Xion&variables_values=$phone_otp&route=otp&numbers=" . urlencode($phone),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($response == false) {
            echo 'Curl error: ' . curl_error($curl);
            dd(curl_error($curl));
        } else {
            $result = json_decode($response, true);
            if (isset($result['return']) && $result['return'] === true) {

                OtpVerification::create([
                    'user_id' => auth()->id(),
                    'otp_type' => 'phone',
                    'otp_code' => $phone_otp,
                    'created_by' => auth()->id(),
                ]);

                if (auth()->user()->role == user_roles('3')) {
                    InfluencerDetail::create([
                        'user_id' => auth()->id(),
                        'phone' => $request->phone,
                        'created_by' => auth()->id(),
                    ]);
                }

                $encryptedOtpType = Crypt::encryptString('phone');
                return redirect()->route('brand.otp', ['otp_type' => $encryptedOtpType])
                    ->with('success', 'OTP has been sent to your email.');
            } else {
                if (isset($result['error_code'])) {
                    return redirect()->back()->withErrors('Failed to send message: ' . $result['error_message']);
                } else {
                    return redirect()->back()->withErrors('Failed to send message due to unknown error.' . $err);
                }
            }
        }

        return redirect()->route('admin.index')->with('success', 'Your account has been verified.');
    }

    public function store_verify_whatsapp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'whatsapp' => 'required|numeric|digits:10',
            'influencer_id' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        if ($request->influencer_id) {
            if (auth()->user()->role == user_roles('2')) {
                InfluencerDetail::where('id', $request->influencer_id)->update([
                    'whatsapp' => $request->whatsapp,
                ]);
            }
        }

        $otp_type = 'whatsapp';
        $otp_code = random_int(10000, 99999);

        OtpVerification::create([
            'user_id' => auth()->id(),
            'otp_type' => $otp_type,
            'otp_code' => $otp_code,
            'created_by' => auth()->id(),
        ]);


        $encryptedAcType = Crypt::encryptString($otp_type);
        return redirect()->route('socail.otp', [$encryptedAcType]);
    }
}
