<?php

Route::get('/', 'PagesController@root')->name('root');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users','UsersController',['only' =>['show','update','edit']]);
