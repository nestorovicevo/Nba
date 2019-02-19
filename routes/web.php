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

Route::get('/', 'TeamsController@index')->name('all-teams');

Route::get('/teams/{id}', 'TeamsController@get')->name('single-team');

Route::get('/players/{id}', 'PlayersController@get');

Route::get('/register', ['as' => 'show-register', 'uses' => 'RegisterController@create']);
Route::post('/register', 'RegisterController@store')->name('register');
