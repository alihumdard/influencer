<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OtpVerificationController;
use App\Http\Controllers\InfluencerController;
use App\Http\Controllers\SocialAccountController;
use App\Http\Controllers\CompaignController;

// Routes for admin with authentication check
Route::prefix('portal')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/save-brand-detail', [BrandController::class, 'store'])->name('save.brand.detail');
    Route::get('/socail-account/{ac_type}', [InfluencerController::class, 'account_type'])->name('account.type');
    Route::match(['get', 'post'], '/portal/socali-account', [OtpVerificationController::class, 'verify_socal_otp'])->name('generate.social.otp');
    Route::get('/socail-insta-details', [SocialAccountController::class, 'socail_insta_detials'])->name('socail.insta.details');
    Route::get('/socail-yt-details', [SocialAccountController::class, 'socail_yt_detials'])->name('socail.yt.details');
    Route::post('/yt-details-store', [SocialAccountController::class, 'yt_detials_store'])->name('yt.details.store');
    Route::post('/insta-details-store', [SocialAccountController::class, 'insta_detials_store'])->name('insta.details.store');

    Route::get('/socail-otp/{ac_type}', [OtpVerificationController::class, 'socail_otp'])->name('socail.otp');
    Route::get('/brand-otp/{otp_type}', [OtpVerificationController::class, 'brand_otp'])->name('brand.otp');
    Route::get('/verified-whatsapp', [OtpVerificationController::class, 'whatsapp_verified'])->name('wt.vefied.store');
    Route::get('/create-compaign', [CompaignController::class, 'create_compaign'])->name('create.compaign');
    Route::post('/store-influe-phone', [OtpVerificationController::class, 'store_influe_phone'])->name('store.influe.phone');
    Route::post('/verify-opt', [OtpVerificationController::class, 'verify_otp'])->name('verify.otp');
    Route::post('/generate-opt', [OtpVerificationController::class, 'store'])->name('generate.otp');
    Route::post('/store-email-opt', [OtpVerificationController::class, 'store_email'])->name('generate.email.otp');
    Route::post('/store-verify-whatsapp', [OtpVerificationController::class, 'store_verify_whatsapp'])->name('store.verify.whatsapp');
    Route::post('/store-whatsapp', [OtpVerificationController::class, 'store_whatsapp'])->name('store.whatsapp');

    Route::post('/store-compaign', [CompaignController::class, 'store_compaign'])->name('store.compaign');
});


