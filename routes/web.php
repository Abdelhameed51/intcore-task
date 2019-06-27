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
    return view('sessions.choose');
});

Route::get('/register', 'registerController@create');
Route::post('/register', 'registerController@store');

Route::get('/login', 'sessionsController@create')->name('login');
Route::post('/profile', 'sessionsController@store')->name('login');
Route::get('/logout', 'sessionsController@logout');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/profile/show','profile@show');
    Route::put('/profile/update','profile@update');

});

