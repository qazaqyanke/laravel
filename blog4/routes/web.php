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

Route::get('/', 'MainController@index')->name('post.index');

Route::get('/about', 'MainController@about')->name('about');

Route::get('/posts/{id}', 'MainController@show')->name('post.show');

Route::get('/posts', 'MainController@create')->name('post.create');

Route::get('/posts{id}/edit', 'MainController@edit')->name('post.edit');

Route::post('/posts', 'MainController@store')->name('post.store');

Route::put('/posts/{id}', 'MainController@update')->name('post.update');

Route::delete('/posts/{id}', 'MainController@destroy')->name('post.destroy');

