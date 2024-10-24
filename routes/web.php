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

Route::get('/homepage-brand', function () {
    return view('pages.homepage.homepage-brand');
});

Route::get('/chat', function () {
    return view('pages.chat.chat');
});
