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

Route::get('addpost','HomeController@addpost');
	
Route::get('allpost','HomeController@allpost');
Route::get('dashboard','HomeController@dashboard');
Route::get('login','HomeController@login');
Route::get('logout','HomeController@logout');
Route::get('register','HomeController@register');
Route::post('/save-post','HomeController@save_post');
Route::post('/registration','HomeController@registration');
Route::post('/loginstore','HomeController@store');
Route::get('/delete/{id}','HomeController@delete');
Route::get('/update/{id}','HomeController@update');
Route::post('/hot/{id}','HomeController@hot');
Route::group(['middleware' => 'take'], function(){
Route::get('/','HomeController@welcome');
});


//;laravel new imageupload