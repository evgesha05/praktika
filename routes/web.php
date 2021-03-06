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

Route::match(['get', 'post'], '/', 'StartPageController@index')->name('index');

Auth::routes();

Route::resource('/report', 'ReportController', ['middleware' => 'auth']);
Route::resource('/report/{report}/thing', 'ThingController', ['middleware' => 'auth']);

Route::get('/profile', 'ProfileController@index', ['middleware' => 'auth'])->name('profile');
Route::post('/profile', 'ProfileController@update', ['middleware' => 'auth'])->name('profile.update');