<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', function(){
    return redirect()->route('post.index');
});

Route::get('/', 'MainController@index')->name('post.index');

Route::get('/about', 'MainController@about')->name('about');

Route::get('/posts/{post}', 'MainController@show')->name('post.show');

Route::get('/posts/create', 'MainController@create')->name('post.create');

Route::get('/posts{post}/edit', 'MainController@edit')->name('post.edit');

Route::post('/posts', 'MainController@store')->name('post.store');

Route::put('/posts/{post}', 'MainController@update')->name('post.update');

Route::delete('/posts/{post}', 'MainController@destroy')->name('post.destroy');

Route::post('/posts/{post}/comments', MainController::class.'@storeComment')->name('post.comment.store');

Route::post('/tags', MainController::class.'@storeTag')->name('tag.store');

Route::delete('/tags/{tag}', 'MainController@destroyTag')->name('tag.destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
