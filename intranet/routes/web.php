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
    return redirect()->route('login');
});

Route::get('/courses', function (){
   return view('courses.index') ;
});

Route::get('/courses/{id}', function (){
    return view('courses.show');
})->name('courses.show');

Route::get('/chapters/{id}', function (){
    return view('courses.chapter');
})->name('courses.chapter');

Route::get('/lessons/create', function (){
   return view('courses.lesson_create');
})->name('courses.lesson.create');

Route::get('/lessons/{id}', function (){
    return view('courses.lesson');
})->name('courses.lesson');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
