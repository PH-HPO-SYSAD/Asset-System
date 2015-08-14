<?php

Route::group(['middleware' => 'guest'], function(){

	Route::get('/auth/login', 'Auth\AuthController@getLogin');

	Route::post('/auth/login', 'Auth\AuthController@postLogin');

	Route::get('/auth/register', 'Auth\AuthController@getRegister');

	Route::post('/auth/register', 'Auth\AuthController@postRegister');

});

Route::group(['middleware' => 'auth'], function(){

	Route::get('/auth/logout', 'Auth\AuthController@getLogout');

	Route::get('/', 'DashboardController@index');

	Route::get('/asset', 'AssetController@index');

	Route::get('/asset/{asset}', 'AssetController@show');

	Route::group(['middleware' => 'admin'], function(){

		Route::get('/asset/create', 'AssetController@create');

		Route::post('/asset', 'AssetController@store');

		Route::get('/asset/{asset}/edit', 'AssetController@edit');

		Route::put('/asset/{asset}', 'AssetController@update');

	});
	
});
