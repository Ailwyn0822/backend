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
Route::get('/BikiniBottomType', 'x@BikiniBottomType');
Route::get('/BikiniBottom_info/{BikiniBottom_id}', 'x@BikiniBottom_info');
Route::post('/send','x@send');

//Cart test
Route::post('/addcart','CartController@addcart');//新增
Route::get('/cart','CartController@cart');//購物車畫面
Route::post('/changeProductQty','CartController@changeProductQty');//修改
Route::post('/deleteProductInCart','CartController@deleteProductInCart');//刪除
Route::get('/checkout','CartController@checkout');//結帳





Route::get('/getcontent','CartController@getcontent');
Route::get('/totalcart','CartController@totalcart');



Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');


Route::prefix('admin')->middleware(['auth'])->group(function(){

    Route::get('news', 'NewsController@index');
    Route::get('news/create', 'NewsController@create');
    Route::post('news/store', 'NewsController@store');
    Route::get('news/edit/{news_id}', 'NewsController@edit');
    Route::post('news/update/{news_id}', 'NewsController@update');
    Route::get('news/destroy/{news_id}', 'NewsController@destroy');

});

Route::prefix('admin')->middleware(['auth'])->group(function(){

    Route::get('bb', 'bbController@index');
    Route::get('bb/create', 'bbController@create');
    Route::post('bb/store', 'bbController@store');
    Route::get('bb/edit/{bb_id}', 'bbController@edit');
    Route::post('bb/update/{bb_id}', 'bbController@update');
    Route::get('bb/destroy/{bb_id}', 'bbController@destroy');


    Route::get('bbtype', 'bbtypeController@index');
    Route::get('bbtype/create', 'bbtypeController@create');
    Route::post('bbtype/store', 'bbtypeController@store');
    Route::get('bbtype/edit/{bbtype_id}', 'bbtypeController@edit');
    Route::post('bbtype/update/{bbtype_id}', 'bbtypeController@update');
    Route::get('bbtype/destroy/{bbtype_id}', 'bbtypeController@destroy');

    Route::post('/ajax_upload_img','AdminController@ajax_upload_img');
    Route::post('/ajax_delete_img','AdminController@ajax_delete_img');
    Route::post('/ajax_delete_product_imgs','AdminController@ajax_delete_product_imgs');

});

