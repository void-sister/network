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

/**
 * Home
 */

Route::get('/', [
  'uses' => '\App\Http\Controllers\HomeController@index',
  'as' => 'home',
]);

/**
 * Authentication
 */

Route::get('/signup', [
  'uses' => '\App\Http\Controllers\AuthController@getSignup',
  'as' => 'auth.signup',
]);

Route::post('/signup', [
  'uses' => '\App\Http\Controllers\AuthController@postSignup',
]);

Route::get('/signin', [
  'uses' => '\App\Http\Controllers\AuthController@getSignin',
  'as' => 'auth.signin',
]);

Route::post('/signin', [
  'uses' => '\App\Http\Controllers\AuthController@postSignin',
]);
