<?php
// Route Get methods
Route::get('/', 'DashController@index');
Route::get('pincode', 'DashController@pincode');
Route::get('register', 'DashController@register');
Route::get('index', 'DashController@dashboard');
Route::get('add', 'DashController@AddAsset');
Route::get('search', 'DashController@SearchAsset');

// Route POST methods
