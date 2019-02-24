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
Route::get('/',"TestController@index");
Route::get('/',"TestController@index");
Route::get('/send',"TestController@send");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('add', 'manage@AddArticle');
Route::post('add', 'manage@AddArticle');
Route::get('view', 'manage@view');
Route::get('read/{id}', 'manage@read');
Route::post('read/{id}', 'manage@read');
