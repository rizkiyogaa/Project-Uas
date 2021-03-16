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

Route::get('/', 'DashboardController@index')->name('dashboard.index');

Auth::routes();
Route::resource('menu', 'MenuController')->parameter('menu', 'id')->except('show');
Route::get('/home', 'HomeController@index')->name('home');