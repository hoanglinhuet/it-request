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

Route::get('/', function () {
   // return view('w');
});

Route::get('login','LoginController@getLogin')->name('login');
Route::post('login','LoginController@postLogin')->name('login');
Route::post('logout', 'LoginController@getLogout')->name('logout');

Route::get('home','HomeController@index')->name('home');



