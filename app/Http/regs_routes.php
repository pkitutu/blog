<?php 
Route::get('registrations/index','regs\RegistrationsController@index');
Route::get('registrations/show/{id}','RegistrationsController@show');

Route::get('registrations/create','RegistrationsController@create');
Route::post('registrations/store','RegistrationsController@store');

Route::get('registrations/edit/{id}','RegistrationsController@edit');
Route::post('registrations/update','RegistrationsController@update');

Route::get('registrations/delete/{id}','RegistrationsController@destroy');


?>
