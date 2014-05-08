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
Route::get('photos', 'ImageController@getIndex');
Route::get('video', 'VideoController@getIndex');
Route::get('dates', 'DatesController@getIndex');