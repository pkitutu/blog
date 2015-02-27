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

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('live','WelcomeController@nana');

Route::get('posts/index','PostsController@index');
Route::get('posts/show/{id}','PostsController@show');

Route::get('posts/create','PostsController@create');
Route::post('posts/store','PostsController@store');

Route::get('posts/edit/{id}','PostsController@edit');
Route::post('posts/update','PostsController@update');

Route::get('posts/delete/{id}','PostsController@destroy');


//
//Routes for registrations
//

Route::get('registrations/index','RegistrationsController@index');
Route::get('registrations/show/{id}','RegistrationsController@show');

Route::get('registrations/create','RegistrationsController@create');
Route::post('registrations/store','RegistrationsController@store');

Route::get('registrations/edit/{id}','RegistrationsController@edit');
Route::post('registrations/update','RegistrationsController@update');

Route::get('registrations/delete/{id}','RegistrationsController@destroy');


