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
