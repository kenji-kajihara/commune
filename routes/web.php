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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'commune','middleware'=>'auth'], function() {
    
    Route::get('community/create','CommunityController@add');
    Route::post('community/create','CommunityController@create');
    Route::get('community','CommunityController@index');
    Route::get('community/edit','CommunityController@edit');
    Route::post('community/edit','CommunityController@update');
    Route::get('community/delete','CommunityController@delete');
    Route::get('community/description','CommunityController@description');
    
    Route::get('profile/valify','ProfileController@valify');
    Route::get('profile/create','ProfileController@add');
    Route::post('profile/create','ProfileController@create');
    Route::get('profile','ProfileController@index');
    Route::get('profile/edit','ProfileController@edit');
    Route::post('profile/edit','ProfileController@update');
    Route::get('profile/delete','ProfileController@delete');
    Route::get('profile/myProfile','ProfileController@myProfile');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
