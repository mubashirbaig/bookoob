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

Route::get('home', ['middleware'=>'auth','uses'=>'HomeController@index']);

Route::resource('admin', 'AdminController');
Route::resource('books', 'BooksController');
Route::resource('category', 'CategoryController');
Route::resource('orders', 'OrdersController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
