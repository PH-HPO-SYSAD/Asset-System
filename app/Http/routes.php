<?php
// Route Get methods
// Route::get('/', 'DashController@index');
// Route::get('pincode', 'DashController@pincode');
// Route::get('register', 'DashController@register');
// Route::get('index', 'DashController@dashboard');
// Route::get('add', 'DashController@AddAsset');
// Route::get('search', 'DashController@SearchAsset');

Route::group(['middleware' => 'guest'], function(){

	Route::get('/auth/login', 'Auth\AuthController@getLogin');

	Route::post('/auth/login', 'Auth\AuthController@postLogin');

	Route::get('/auth/register', 'Auth\AuthController@getRegister');

	Route::post('/auth/register', 'Auth\AuthController@postRegister');

});

Route::group(['middleware' => 'auth'], function(){
	
	Route::get('/auth/logout', 'Auth\AuthController@getLogout');
	
	Route::get('/', 'DashboardController@index');
	
});
