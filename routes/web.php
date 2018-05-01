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


Route::get('/portfolio', 'HomeController@portfolios')->name('our_portfolios');

Route::get('/product', 'HomeController@products')->name('our_products');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/products/rows', 'ProductsController@rows')->name('products.rows');

Route::resource('products','ProductsController');

