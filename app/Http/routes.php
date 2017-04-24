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

//...................................................
Route::get('replies/index','RepliesController@index');
Route::get('replies/show/{id}','RepliesController@show');

Route::get('replies/create','RepliesController@create');
Route::post('replies/store','RepliesController@store');

Route::get('replies/edit/{id}','RepliesController@edit');
Route::post('replies/update','RepliesController@update');

Route::get('replies/delete/{id}','RepliesController@destroy');


//
//Routes for registrations
//

require __DIR__."/regs_routes.php";
