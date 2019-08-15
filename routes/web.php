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

Route::get('/users.home', 'TestController@userhome');

Route::get('/admin.home', 'TestController@adminhome');

Route::get('/admin.delete/{id}', 'TestController@admindelete');

Route::get('/admin.edit/{id}', 'TestController@adminedit');
Route::post('/admin.edit/{id}', 'TestController@adminedit');

Route::get('/admin.insert', 'TestController@admininsert');
Route::post('/admin.insert', 'TestController@admininsert');

Route::get('/insert', 'TestController@insert');
Route::post('/insert', 'TestController@insert');

Route::get('/login', 'TestController@login');
Route::post('/login', 'TestController@login');

Route::get('/', 'TestController@home');

// Route::get('/test/{id}','TestController@test');


