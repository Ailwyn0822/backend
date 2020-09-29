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



Route::get('/', 'x@index');
Route::get('/news', 'x@news');
Route::get('/news_info/{news_id}', 'x@news_info');
Route::get('/contact_us', 'x@contact_us');
Route::get('/BikiniBottom', 'x@BikiniBottom');
Route::get('/BikiniBottom_info/{BikiniBottom_id}', 'x@BikiniBottom_info');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
