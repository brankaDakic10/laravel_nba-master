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

Route::get('/','TeamsController@index')->name('all-teams');

Route::middleware('auth')->get('/teams/{id}','TeamsController@show')->name('team');


Route::middleware('auth')->get('/players/{id}','PlayersController@show')->name('player');

Route::middleware('guest')->get('/register', 'RegisterController@create');
Route::middleware('guest')->post('/register', 'RegisterController@store');

//login
Route::middleware('guest')->get('/login', 'LoginController@create')->name('login');
Route::middleware('guest')->post('/login', 'LoginController@store')->name('login-store');
//logout
Route::middleware('auth')->get('/logout', 'LoginController@logout')->name('logout');

// store comment
Route::middleware('auth')->post('/teams/{team_id}/comments','CommentsController@store')->name('comments-team');

// verification user with mail
Route::get('/verification/{id}','LoginController@verification')->name('verification');

