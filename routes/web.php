<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
 return view('pages.index');
})->name('index');

Route::get('/waitList', function () {
 return view('pages.waitlist');
})->name('waitList');

Route::get('/account-creation', function () {
 return view('pages.signup');
})->name('signup');

Route::get('/account-level', function () {
    return view('pages.account_level');
})->name('account_level');

Route::get('/settings', function () {
    return view('pages.settings');
})->name('settings');

Route::get('/summary', function () {
    return view('pages.summary');
})->name('summary');

Route::get('/home-keywords', function () {
    return view('pages.home_keywords');
})->name('home_keywords');

Route::get('/community-v3', function () {
    return view('pages.community_v3');
})->name('community_v3');

Route::get('/community-v3-video', function () {
    return view('pages.community_v3_video');
})->name('community_v3_video');