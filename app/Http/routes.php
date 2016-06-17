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

Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);

Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('why', ['as' => 'why', 'uses' => 'HomeController@why']);

Route::get('about', ['as' => 'about', 'uses' => 'HomeController@about']);

Route::get('media', ['as' => 'media', 'uses' => 'HomeController@media']);

Route::get('login', ['as' => 'login', 'uses' => 'HomeController@login']);

Route::get('signup', ['as' => 'signup', 'uses' => 'HomeController@signup']);

Route::get('forgotpassword', ['as' => 'forgotPassword', 'uses' => 'HomeController@forgotPassword']);
