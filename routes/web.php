<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();



// Login
Route::get('/', function () {
    return view('login');
})->name('/');

// logout
Route::get('/logout', 'Auth\LoginController@logout');

// page Error 404
Route::get('/404', function () {
    return view('error404');
})->name('404');



// Dashboard
Route::get('/home', function () {
    return view('dashboard.home');
})->name('home');

// Accounts
Route::get('/accounts', function () {
    return view('dashboard.accounts.accounts');
})->name('accounts');

// Ads Manager
Route::get('/ads-manager', function () {
    return view('dashboard.ads_manager.ads-manager');
})->name('ads-manager');


