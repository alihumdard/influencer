<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\GoogleAuthController;




Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/login/{role?}', [WebController::class, 'login'])->name('login');
Route::get('/brand-login/{role?}', [GoogleAuthController::class, 'google_brand'])->name('login.brand');
Route::get('/influencer-login/{role?}', [GoogleAuthController::class, 'google_influen'])->name('login.influencer');
Route::get('auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback'])->name('google.callback');
Route::get('/logout', [WebController::class, 'logout'])->name('logout');

include __DIR__ . '/admin.php';


Route::get('/admin', function () {
    return view('pages.dashboard');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/influencer-login', function () {
    return view('pages.influencer-login');
});


Route::get('/otp', function () {
    return view('pages.otp');
});

Route::get('/verify-phone', function () {
    return view('pages.verify-phone');
});

Route::get('/verify-whatsapp', function () {
    return view('pages.verify-whatsapp');
});

Route::get('/verify-email', function () {
    return view('pages.verify-email');
});

Route::get('/brand-detail', function () {
    return view('pages.brand-detail');
});

Route::get('/infu-detail', function () {
    return view('pages.infu-detail');
});

Route::get('/link-account', function () {
    return view('pages.link-account');
});

Route::get('/add-insta-account', function () {
    return view('pages.add-insta-account');
});

Route::get('/insta-otp', function () {
    return view('pages.insta-otp');
});

Route::get('/yt-otp', function () {
    return view('pages.influencers.yt-otp');
});