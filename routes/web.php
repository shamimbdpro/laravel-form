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

Route::get('/home', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Frontend

Route::get('/', 'websiteController@student')->name('student');


//Backend

Route::get('deshboard','adminController@index')->name('deshboard');
Route::get('curd','adminController@curd')->name('curd');
Route::post('insert','websiteController@add_data')->name('insert');

