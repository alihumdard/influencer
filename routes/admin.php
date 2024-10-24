<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OtpVerificationController;
use App\Http\Controllers\InfluencerController;
use App\Http\Controllers\SocialAccountController;
use App\Http\Controllers\CompaignController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;

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
    Route::get('/create-category', [CompaignController::class, 'create_new_category'])->name('category.create');

    Route::post('/store-influe-phone', [OtpVerificationController::class, 'store_influe_phone'])->name('store.influe.phone');
    Route::post('/verify-opt', [OtpVerificationController::class, 'verify_otp'])->name('verify.otp');
    Route::post('/generate-opt', [OtpVerificationController::class, 'store'])->name('generate.otp');
    Route::post('/store-email-opt', [OtpVerificationController::class, 'store_email'])->name('generate.email.otp');
    Route::post('/store-verify-whatsapp', [OtpVerificationController::class, 'store_verify_whatsapp'])->name('store.verify.whatsapp');
    Route::post('/store-whatsapp', [OtpVerificationController::class, 'store_whatsapp'])->name('store.whatsapp');

                                            // Compaign Routes

    Route::post('/store-compaign-step1', [CompaignController::class, 'store_compaign_setp_1'])->name('store.step1.compaign');
    Route::post('/store-compaign-step2', [CompaignController::class, 'store_compaign_setp_2'])->name('store.step2.compaign');
    Route::match(['get', 'post'], '/storeReel', [CompaignController::class, 'store_reel'])->name('store.reel');
    Route::delete('/campaign/delete-draft/{id}', [CompaignController::class, 'delete_draft_compaign'])->name('compaign.delete');

    Route::match(['get', 'post'], '/products', [ProductController::class, 'products'])->name('admin.prodcuts');
    Route::match(['get'], '/single_product_layout/{id}', [ProductController::class, 'single_product_layout'])->name('admin.single_product_layout');
    Route::match(['get', 'post'], '/storeProduct', [ProductController::class, 'store_product'])->name('admin.storeProduct');
    Route::delete('/deleteVariant', [ProductController::class, 'delete_variant'])->name('admin.deleteVariant');
    Route::match(['get', 'post'], '/deleteProductAttribute', [ProductController::class, 'delete_product_attribute'])->name('admin.deleteProductAttribute');

    Route::delete('/campaign/productlist', [ProductController::class,'product_list_delete'])->name('product.list.delete');
    Route::get('/campaign/product/duplicate', [ProductController::class,'product_duplicate'])->name('product.duplicate');
    Route::get('/campaign/product/get', [ProductController::class,'product_get'])->name('product.get');
    Route::get('/product/search', [ProductController::class, 'product_search'])->name('product.liveSearch');

    Route::post('/store-compaign-reel', [CompaignController::class, 'store_compaign_reel'])->name('store.compaign.reel');
    Route::post('/store-compaign-story', [CompaignController::class, 'store_compaign_story'])->name('store.compaign.story');
    Route::post('/store-compaign-video', [CompaignController::class, 'store_compaign_video'])->name('store.compaign.video');
    Route::post('/store-compaign-post', [CompaignController::class, 'store_compaign_post'])->name('store.compaign.post');
    Route::post('/store-compaign-logo', [CompaignController::class, 'store_compaign_logo'])->name('store.compaign.logo');

                                // End Compaign Routes

    Route::match(['get', 'post'], '/settings', [SettingController::class, 'inbox'])->name('admin.settings');
    Route::match(['get', 'post'], '/storeSetting', [SettingController::class, 'store_product'])->name('admin.store.setting');
});
