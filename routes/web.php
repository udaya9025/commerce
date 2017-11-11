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

Route::get('/', function () {
    return view('welcome');
});

Route::get('all','ProductController@allProducts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('create-product', 'ProductController@toCreate');


Route::post('add-product','ProductController@addProduct');

Route::get('product/display/{id}','ProductController@getDetails');