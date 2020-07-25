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
Route::get('login', function () {
    return view('login');
})->name('login');
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
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home/create','ApplicationController@store')->name('application.store');
Route::post('/home/delete','ApplicationController@destroy')->name('application.destroy');
Route::post('/home/about','ApplicationController@index')->name('application.index');
Route::post('/home/update','ApplicationController@update')->name('application.update');
Route::post('/home/is_suspend','ApplicationController@is_suspend')->name('application.is_suspend');



// Accounts
Route::get('/accounts', 'AccountController@index')->name('accounts');
Route::post('/account/create','AccountController@store')->name('account.store');
Route::post('/account/update','AccountController@update')->name('account.update');
Route::post('/account/delete','AccountController@destroy')->name('account.destroy');
Route::post('/account/get','AccountController@getAccountById');



// Ads Manager
Route::get('/ads-manager', 'AdsmanagerController@index')->name('ads-manager');
Route::post('/ads-manager/create','AdsmanagerController@store')->name('ads-manager.store');
Route::post('/ads-manager/update','AdsmanagerController@update')->name('ads-manager.update');
Route::post('/ads-manager/getadsbyid','AdsmanagerController@getAdsById')->name('ads-manager.getAdsById');
Route::post('/ads-manager/delete','AdsmanagerController@destroy')->name('ads-manager.destroy');


// My Ads
Route::get('/my-ads','MyadsController@index')->name('myads');
Route::post('/my-ads/create','MyadsController@store')->name('myads.store');
Route::post('/my-ads/update','MyadsController@update')->name('myads.update');
Route::post('/my-ads/delete','MyadsController@destroy')->name('myads.destroy');
Route::post('/my-ads/getById','MyadsController@getMyAdsById');


// Ad Protector
Route::get('/ad-protector','AdProtectorController@index')->name('adProtector');
Route::post('/ad-protector/update','AdProtectorController@update')->name('adProtector.update');
Route::post('/ad-protector/delete','AdProtectorController@destroy')->name('adProtector.destroy');

Route::get('/home', 'HomeController@index')->name('home');
