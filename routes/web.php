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
/*Route::when('*', 'csrf', ['post']);*/

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::resource('management','ManagementController');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/mark', 'MarkController');




