<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'HomeController@index');
// // Route::post('/', 'HomeController@getIndex');

// Route::post('/', 'HomeController@postIndex');

// Route::post('/mail', 'HomeController@sendEmail');

// Route::controller('/', 'HomeController');

Route::get('/', 'HomeController@getIndex');
Route::post('/', 'HomeController@getIndex');

Route::post('/', 'HomeController@postIndex');

Route::post('/share-by-email', 'HomeController@postShareByEmail');