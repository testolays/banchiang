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

//Route::get('/', 'WelcomeController@index');
//Route::get('/', 'WelcomeController@index');
Route::get('/', function(){
	return view('home.index');
});

Route::get('about', function(){
	return view('about.index');
});

Route::get('virtual_museum', function(){
	return view('virtual_museum.index');
});

Route::get('manual', function(){
	return view('virtual_museum.manual');
});

Route::get('timeline', function(){
	return view('timeline.index');
});

// Early
Route::get('early_feature', function(){
	return view('collection.early.feature');
});
Route::get('early_structural', function(){
	return view('collection.early.structural');
});
Route::get('early_details', 'DetailController@earlyDetail');

// Middle
Route::get('middle_feature', function(){
	return view('collection.middle.feature');
});
Route::get('middle_structural', function(){
	return view('collection.middle.structural');
});
Route::get('middle_details', 'DetailController@middleDetail');

//Late
Route::get('late_feature', function(){
	return view('collection.late.feature');
});
Route::get('late_structural', function(){
	return view('collection.late.structural');
});
Route::get('late_details', 'DetailController@lateDetail');

Route::get('item_detail/{id}', 'DetailController@show');

Route::resource('search_results', 'SearchItemController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
