<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

/* Queste sono le rotte di Auth */
Auth::routes();

/* Questa è la rotta */
/* Route::get('/home', 'Admin\HomeController@index')->name('home'); */

Route::middleware('auth')->namespace('Admin')->name('admin')->prefix('admin')->group(function () {
    Route::get('/', 'Admin\HomeController@index')->name('dashboard');
});

