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

Route::post('hello', 'HelloController@post');
Route::get('hello', 'HelloController@index');
Route::get('byebye', 'ByebyeController@index');
Route::get('person', 'PersonController@index');
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');