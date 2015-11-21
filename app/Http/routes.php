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

Route::get('/home', function () {
    return view('welcome');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');

Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/user', ['as' => 'user.all', 'uses' => 'UserController@index']);

	Route::get('/user/{user}/edit', ['middleware' => ['auth', 'acl:manage_user'], 'uses' => 'UserController@edit', 'as' => 'admin.user.edit']);

	Route::get('user/suspend/{id}', ['middleware' => ['acl:suspend_user'], ' uses' => 'UserController@closeUserAccount', 'as' => 'admin.user.suspend']);
});