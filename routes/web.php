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

Route::middleware('auth')->namespace('Admin')->name('admin.')->prefix('admin')->group(function () {
    /* Admin Dashboard */
    Route::get('/', 'HomeController@index')->name('dashboard');
    /* Admin post */
    Route::resource('posts', 'PostController');
});

/* Rotta per il front office */
Route::get('{any?}', function() {
    return view('guests.home');
})->where('any', '.*');
