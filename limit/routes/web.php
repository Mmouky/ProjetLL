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

Route::get('/', 'WelcomeController@index');

Route::get('/play', 'PlayController@index');

Route::get('/leaderboard', 'LeaderBoardController@index');

Route::get('/ideas', 'IdeasController@index');

Route::get('/register', 'RegisterController@index');
