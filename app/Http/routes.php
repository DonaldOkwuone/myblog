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

Route::get('/', 'BlogController@index');



Route::group(['middleware' => ['web']], function(){
	Route::resource('blog', 'BlogController');
	
	Route::get('/login', function () {
		return view('admin.login');
	});

	Route::get('/contact-us', function () {
		return view('blog.contact');
	});

	Route::get('/about-us', function () {
		return view('blog.about');
	});
	
	
});

Route::group(['middleware' => ['auth']], function(){
	Route::resource('admin', 'AdminController');
	Route::resource('category', 'CategoryController');
});




 


Route::auth();

Route::get('/home', 'HomeController@index');
