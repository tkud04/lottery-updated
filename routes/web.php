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
Route::get('web-response', 'MainController@getWebResponse');
Route::post('web-response', 'MainController@postWebResponse');

Route::get('about', 'MainController@getAbout');
Route::get('terms', 'MainController@getTerms');
Route::get('tales-of-joy/{url?}', 'MainController@getTestimonials');
Route::get('add-testimonial', 'MainController@getAddTestimonial');
Route::post('add-testimonial', 'MainController@postAddTestimonial');
Route::get('view-clients', 'MainController@getClients');
Route::get('apply-raffle', 'MainController@getApplyRaffle');
Route::post('apply-raffle', 'MainController@postApplyRaffle');
Route::get('web-reply', 'MainController@getWebReply');
Route::post('web-reply', 'MainController@postWebReply');
Route::get('delete/{id?}', 'MainController@getDeleteClient');

Route::get('e7bf9ef7933f.html', function(){
  return "ca0649980ab1";
});
