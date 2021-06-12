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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'DashboardController@index')->name('dashboard.index');
Route::group(['middleware' => 'auth'], function() {
    Route::resource('myorder', 'OrderController');
    Route::resource('cart', 'CartController');
});
Route::group(['middleware' => ['role:Admin', 'auth'], 'prefix' => 'admin'], function () {
    Route::resource('items', 'ItemController');
    Route::resource('orders', 'OrderController');
});