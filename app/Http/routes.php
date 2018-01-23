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
Route::get('/', [

	'as' => 'login-form', 'uses' => 'HomeController@login'
	
]);+

Route::group(['prefix' => 'auth'], function()
{	
	/**
	 * Handle form registration
	 */
	Route::get('/regis', [

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
	Route::get('/', [

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
Route::group(['prefix' => 'admin'], function()
{
	Route::get('apotik/list', 'ApotikController@index');
	Route::get('apotik/create', 'ApotikController@create');
	Route::post('apotik/store', 'ApotikController@store');
	Route::get('apotik/edit', 'ApotikController@edit');
	Route::get('apotik/update', 'ApotikController@update');
	Route::get('apotik/delete/{id}', 'ApotikController@destroy');

	Route::get('kategori/list', 'KategoriObatController@index');
	Route::get('kategori/create', 'KategoriObatController@create');
	Route::get('kategori/edit/{id}', 'KategoriObatController@edit');
	Route::post('kategori/store', 'KategoriObatController@store');
	Route::get('kategori/hapus/{id}', 'KategoriObatController@destroy');

	Route::get('obat/list', 'ObatController@index');
	Route::get('obat/create', 'ObatController@create');
	Route::get('obat/edit/{id}', 'ObatController@edit');
	Route::post('obat/store', 'ObatController@store');
	Route::get('obat/delete/{id}', 'ObatController@destroy');
});

/**
 * VISITOR
 */

Route::get('/visitor', [

	'as' => 'visitor-index', 'uses' => 'VisitorController@index'
 ]);

Route::post('resize', 'AdminController@resize');
