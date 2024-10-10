<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfluencerDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'email',
        'phone',
        'speaking_language',
        'profile_image',
        'dob',
        'bio',
        'gender',
        'address_1',
        'address_2',
        'building_number',
        'street_address',
        'city',
        'country',
        'state',
        'pincode',
        'lifetime_earned',
        'current_balance',
        'withdrawals',
        'balance_withdrawed',
        'first_redeem',
        'total_referral_income',
        'referrals',
        'skipped_referrals',
        'sign_up_bonus_availed',
        'sign_up_bonus_point',
        'status',
        'version_code',
        'last_app_opened_date',
        'gaid',
        'device_id',
        'manufacturer_name',
        'model_name',
        'os_version',
        'product',
        'device_name',
        'display',
        'hardware',
        'brand',
        'ram',
        'app_opened_count',
        'ip_address',
        'notification_token',
        'whatsapp_verified',
        'phone_verified',
        'email_verified',
    ];

    public function createdByUser()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedByUser()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
