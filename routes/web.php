<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create-post', 'PostController@create')->name('create');
Route::post('/create-post', 'PostController@store')->name('store');
Route::get('/', 'PostController@index')->name('index');
Route::get('/{post}', 'PostController@show')->name('show');