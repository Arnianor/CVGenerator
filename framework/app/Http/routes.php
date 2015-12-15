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

//Route::get('formulaire', ['as' => 'formulaire', 'uses' => 'FormController@getForms']);

//Route::post('formulaire', ['as' => 'formulaire', 'uses' => 'FormController@postForms']);

Route::get('CV', ['as' => 'CV', 'uses' => 'CVController@index']);

//Route::post('print', ['as' => 'print', 'uses' => 'PrintController@postPrint']);

Route::controller('formulaire/forms', 'FormController');

//Route::controller('print', 'PrintController')
?>