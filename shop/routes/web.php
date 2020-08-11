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
    return view('index');
});

Route::get('/add-to-cart/{id}','ProductController@getToCart')->name('cart');
Route::get('/shopping-cart','ProductController@getCart')->name('shopping.cart');

Route::get('/', 'ProductController@getProduct')->name('product');

Route::get('/contact', 'MainController@about')->name('contact');
Route::get('/show', 'MainController@showProduct')->name('show');
Route::get('/product/review', 'MainController@review')->name('review');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

