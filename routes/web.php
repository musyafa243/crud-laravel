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

Route::get('/dashboard','PagesController@home');
Route::get('/crud/index','CrudController@index');
Route::get('/items','ItemsController@index');
Route::get('/items/create','ItemsController@create');
Route::get('/items/{item}','ItemsController@show');
Route::post('/items','ItemsController@store');
Route::delete('/items/{item}','ItemsController@destroy');
Route::get('/items/{item}/edit','ItemsController@edit');
Route::patch('/items/{item}','ItemsController@update');


