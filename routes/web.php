<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/user','UserRegisterController@index');

Route::post('/user','UserRegisterController@register')->name('user');
Route::get('/Dashbord','UserManageController@index')->name('shows');
Route::get('/user/{id}/edit','UserManageController@edit')->name('Edit');
Route::post('/user/{id}/update','UserManageController@update')->name('Update');
Route::get('/user/{id}/delete','UserManageController@delete')->name('Delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
