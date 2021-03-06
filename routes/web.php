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

Route::get('/', 'HomeController@index');

Route::get('/post', 'PostController@index')->name('conclusion_post');

Route::get('/profile','ProfileController@index')->name('profile');

Route::post('/profile', 'PostController@post')->name('post');