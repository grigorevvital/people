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

Route::get('/', 'PersonController@index')->name('people.index');
Route::get('/create', 'PersonController@create')->name('people.create');
Route::post('/store', 'PersonController@store')->name('people.store');
Route::get('/show/{id}', 'PersonController@show')->name('people.show');

Route::get('/edit/{id}', 'PersonController@edit')->name('people.edit');
Route::put('/person/{id}', 'PersonController@update')->name('people.update');
Route::delete('/person/{id}', 'PersonController@destroy')->name('people.delete');
