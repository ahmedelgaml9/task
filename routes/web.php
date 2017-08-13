<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', 'pages@index');

Route::get('/about', 'pages@about');

Route::get('/contact', 'pages@contact');
Route::get('/products', 'pages@products');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('auth/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');
Route::get('auth/google', 'google@redirectToProvider');
Route::get('auth/google/callback', 'google@handleProviderCallback');