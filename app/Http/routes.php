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

Route::get('/', 'GeneralAppController@index');

Route::get('search' , 'GeneralAppController@search');

Route::get('admin' , 'GeneralAppController@admin');

Route::get('browse', 'GeneralAppController@browse');

Route::get('addToCart/{id}', 'GeneralAppController@addToCart');

Route::get('checkout/', 'GeneralAppController@checkout');

Route::get('checkout_getDetails/{id}', 'GeneralAppController@getDetails');

Route::post('checkout_getDetails/{id}', 'GeneralAppController@saveDetails');

Route::get('checkout_confirm/', 'GeneralAppController@checkout_confirm');


//Route::get('addToCart/{id}/{qty}', 'GeneralAppController@addToCartQty');

//Route::get('addToCart/{id}/{qty}/{checkout}', 'GeneralAppController@addToCartQtyChecked');
Route::get('checkCart/{id}/{checkout}', 'GeneralAppController@addToCartQtyChecked');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);



























//
///*
//|--------------------------------------------------------------------------
//| Application Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register all of the routes for an application.
//| It's a breeze. Simply tell Laravel the URIs it should respond to
//| and give it the controller to call when that URI is requested.
//|
//*/
//
//
///*Route::get('admin', 'AdminController@login');
//Route::get('create/admin', 'AdminController@create');
//
//Route::post('admin', 'AdminController@handleLogin');*/
//Route::get('page', 'BooksController@home');
//
//Route::resource('books', 'BooksController');
//Route::resource('admin', 'AdminController');
//Route::resource('category', 'CategoryController');
////Route::post('admins', 'AdminController@postLogin');
//
//
//
//
//
//Route::get('/', 'WelcomeController@index');
//
//Route::get('home', ['middleware'=>'auth','uses'=>'HomeController@index']);
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
//
//
//
