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
Route::get('/home','WelcomeController@home')->middleware('guest');
//Route::controller('formulaire', 'FormController');

// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// CV Routes
Route::get('/cvs','CVController@index');
Route::get('/cv','CVController@create');
Route::post('/cv','CVController@store');
Route::get('/cv/{cv}','CVController@show');
Route::delete('/cv/{cv}','CVController@destroy');

// Section Routes
Route::get('cvs/section','SectionController@index');
Route::post('cvs/section','SectionController@store');
Route::delete('cvs/section/{section}','SectionController@destroy');

// TODO Add routes for subsections and template?