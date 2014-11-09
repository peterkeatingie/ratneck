<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'HomeController@getIndex');
Route::get('news', 'NewsController@getIndex');
Route::get('music', 'MusicController@getIndex');
Route::get('gallery', 'ImageController@getIndex');
Route::get('video', 'VideoController@getIndex');
Route::get('dates', 'DatesController@getIndex');
Route::get('rats', 'RatsController@getIndex');
Route::get('signup', 'AuthController@getSignup');
Route::post('signup/register', 'AuthController@getRegister');
Route::get('login', 'AuthController@getLogin');
Route::post('login/authenticate', 'AuthController@getAuthenticate');

Route::get('admin', array(
	'before' => 'auth',
	'uses' => 'AdminController@getIndex',
));

Route::get('admin/galleries', array(
	'before' => 'auth',
	'uses' => 'AdminController@getGalleries',
));

Route::get('admin/images', array(
	'before' => 'auth',
	'uses' => 'AdminController@getImages',
));

Route::get('post/new', array(
	'before' => 'auth',
	'uses' => 'PostController@getNew',
));

Route::get('post/edit', array(
	'before' => 'auth',
	'uses' => 'PostController@getEdit',
));

Route::post('admin/images/upload', array(
	'before' => 'auth',
	'uses' => 'AdminController@getUploadImage',
));

Route::get('signup/verify', 'AuthController@getVerify');