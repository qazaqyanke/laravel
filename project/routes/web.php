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

//Route::get('/', function () {
    //return view('index');
//});

Route::get('/profile', function (){
   return view('layout.profile');
});

Route::get('/', 'MainController@index')->name('index');

Route::get('/ad', 'PostsController@create')->name('layout.ad');
Route::post('/ad','PostsController@store')->name('store');
Route::get('/myad', 'MainController@myad')->name('layout.myad');
Route::get('/ad/create', 'PostsController@create');
Route::get('/ad/{id}', 'PostsController@show')->name('layout.adshow');
Route::post('/ad/{id}/comments', 'PostsController@comments')->name('layouts.adshow.comments');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
