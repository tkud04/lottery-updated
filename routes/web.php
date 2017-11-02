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

Route::get('/', 'MainController@index');
Route::get('apply', 'MainController@getApply');
Route::post('apply', 'MainController@postApply');
Route::get('processing', 'MainController@getProcessing');
Route::get('contact', 'MainController@getContact');
Route::post('contact', 'MainController@postContact');

Route::get('about', 'MainController@getAbout');
Route::get('terms', 'MainController@getTerms');
Route::get('tales-of-joy', 'MainController@getTestimonials');
