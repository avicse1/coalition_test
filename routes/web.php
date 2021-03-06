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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ProductController@index')->name('list');
Route::post('/product', 'ProductController@saveProduct')->name('save_product');
Route::get('/edit-product', 'ProductController@showProduct')->name('show_product');
