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
// Login page
Route::get('/auth/login', function() { 
	//factory('App\User')->create();
	return view('auth.login'); 
});
// Authenticate action
Route::post('/auth/login', 'AuthController@authenticate');

Route::group(['middleware' => 'auth'], function() {
	// Landing page
	Route::get('/', function () {
	    return view('dashboard.index');
	});

	// Logout
	Route::get('/auth/logout', function() {
		Auth::logout();
		return redirect('/');
	});

	// Users
	Route::get('/users', 'UsersController@index');
	Route::get('/users/add', 'UsersController@add');
	Route::post('/users/add', 'UsersController@create');
	Route::get('/users/edit/{id}', 'UsersController@edit')->where('id', '[0-9]+');
	Route::post('/users/edit/{id}', 'UsersController@update')->where('id', '[0-9]+');

	// Expenses
	Route::get('/expenses', 'ExpensesController@index');
	Route::get('/expenses/add', 'ExpensesController@add');
	Route::post('/expenses/add', 'ExpensesController@create');
	Route::get('/expenses/edit/{id}', 'ExpensesController@edit')->where('id', '[0-9]+');
	Route::post('/expenses/edit/{id}', 'ExpensesController@update')->where('id', '[0-9]+');
});

