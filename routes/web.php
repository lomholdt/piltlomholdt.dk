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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/home', 'WeddingController@index');
//Route::post('/home', 'WeddingController@create');

Route::post('/rsvp/store', 'RsvpController@store');
Route::get('/rsvp/index', 'RsvpController@index');

Route::post('/songs/store', 'SongsController@store');
Route::get('/songs/index', 'SongsController@index');

Route::post('/wishes/store', 'WishController@store');
Route::get('/wishes/index', 'WishController@index');
Route::get('/wishes/create', 'WishController@create');
Route::delete('/wishes/{id}', 'WishController@destroy');
Route::get('/wishes/{id}/edit', 'WishController@edit');
Route::put('/wishes/{id}', 'WishController@update');

Route::get('/admin', 'RsvpController@index');
