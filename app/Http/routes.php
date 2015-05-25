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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('creer/adulte', 'AdulteController@create');

Route::post('store', array('as' => 'adulte.store' , 'uses' => 'AdulteController@store'));

Route::get('store', array('as' => 'adulte.index' , 'uses' => 'AdulteController@index'));

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
