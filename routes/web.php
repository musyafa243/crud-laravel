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

Route::get('/', function (){
    return view('/auths/login');
});

Route::get('/registration', 'RegistrationController@create');
Route::post('registration', 'RegistrationController@store');

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware'=>'auth'], function (){
    Route::get('/dashboard','DashboardController@index')->middleware('auth');
    Route::get('/crud/index','CrudController@index');
    Route::get('/items','ItemsController@index');
    Route::get('/items/create','ItemsController@create');
    Route::get('/items/{item}','ItemsController@show');
    Route::post('/items','ItemsController@store');
    Route::get('/items/{item}/destroy','ItemsController@destroy');
    Route::get('/items/{item}/edit','ItemsController@edit');
    Route::patch('/items/{item}','ItemsController@update');
    Route::get('user','UserController@index');
    Route::get('user/json','UserController@json');
    Route::get('/koordinar','KoordinarController@index');
    Route::get('/koordinar/create','KoordinarController@create');
    Route::get('/koordinar/{koordinar}', 'KoordinarController@show');
    Route::post('/koordinar','KoordinarController@store');
    Route::get('/koordinar/{koordinar}/destroy','KoordinarController@destroy');
    Route::get('/koordinar/{koordinar}/edit','KoordinarController@edit');
    Route::patch('/koordinar/{koordinar}','KoordinarController@update');
});


