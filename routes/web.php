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
    Route::get('community/description','CommunityController@description')->name('community.show');
    Route::post('community/description/join','FollowController@join');
    Route::post('community/description/leave','FollowController@leave');
    
    Route::get('profile/create','ProfileController@add');
    Route::post('profile/create','ProfileController@create');
    Route::get('profile','ProfileController@index');
    Route::get('profile/edit','ProfileController@edit');
    Route::post('profile/edit','ProfileController@update');
    Route::get('profile/delete','ProfileController@delete');
    Route::get('profile/myprofile','ProfileController@myprofile');
    Route::get('profile/show','ProfileController@get_profile');
    
    Route::resource('post', 'PostController', ['only' =>['index','create','store','show','edit','update','destroy'] ]);
    Route::resource('comment', 'CommentController',['only' => ['store'] ]);
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/map', 'map');