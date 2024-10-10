<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('influencer_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('phone')->nullable(); 
            $table->string('email')->nullable(); 
            $table->string('speaking_language')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('dob')->nullable();
            $table->string('bio')->nullable();
            $table->string('gender')->nullable();
            $table->text('address_1')->nullable();
            $table->text('address_2')->nullable();
            $table->string('building_number')->nullable();
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode')->nullable();
            $table->double('lifetime_earned', 8, 2)->default(0.0);
            $table->double('current_balance', 8, 2)->default(0.0);
            $table->integer('withdrawals')->default(0);
            $table->double('balance_withdrawed', 8, 2)->default(0.0);
            $table->string('first_redeem')->default('Not Taken');
            $table->double('total_referral_income', 8, 2)->default(0.0);
            $table->integer('referrals')->default(0);
            $table->integer('skipped_referrals')->default(0);
            $table->string('sign_up_bonus_availed')->default('no');
            $table->integer('sign_up_bonus_point')->default(0);
            $table->string('status')->default('active');
            $table->string('version_code')->nullable();
            $table->string('last_app_opened_date')->nullable();
            $table->string('gaid')->nullable();
            $table->string('device_id')->nullable();
            $table->string('manufacturer_name')->nullable();
            $table->string('model_name')->nullable();
            $table->string('os_version')->nullable();
            $table->string('product')->nullable();
            $table->string('device_name')->nullable();
            $table->string('display')->nullable();
            $table->string('hardware')->nullable();
            $table->string('brand')->nullable();
            $table->string('ram')->nullable();
            $table->string('app_opened_count')->default(1);
            $table->string('ip_address')->nullable();
            $table->string('notification_token')->nullable();
            $table->string('whatsapp_verified')->default('no');
            $table->string('phone_verified')->default('no'); 
            $table->string('email_verified')->default('no'); 
            $table->string('insta_verified')->default('no');
            $table->string('youtube_verified')->default('no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('influencer_details');
    }
};
