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

Route::group(['prefix' => 'auth'], function()
{	
	/**
	 * Handle form registration
	 */
	Route::get('/', [

		'as' => 'register-form', 'uses' => 'HomeController@register'
		
	]);

	/**
	 * Handle proses registration
	 */
	Route::post('register', [

		'as' => 'do-Register', 'uses' => 'UserController@doRegister'
	]);

	/**
	 * Handle activation account
	 */
	Route::get('active/{code}',[

		'as' => 'active-akun', 'uses' => 'UserController@doActive'
	]);

	/**
	 * Handle form login
	 */
	Route::get('login', [

		'as' => 'login-form', 'uses' => 'HomeController@login'
		
	]);

	Route::post('do_login', [

		'as' => 'do-Login', 'uses' => 'UserController@doLogin'
	]);

	Route::get('logout', [

		'as' => 'do-Logout', 'uses' => 'UserController@doLogout'

	]);
});

/**
 * ADMIN
 * =======================================================
 */
Route::get('/admin', [

	'as' => 'admin-index', 'uses' => 'AdminController@index'
]);

/**
 * VISITOR
 */

Route::get('/visitor', [

	'as' => 'visitor-index', 'uses' => 'VisitorController@index'
 ]);
