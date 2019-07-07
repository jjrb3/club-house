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
    return view('index');
})->name('home.index');

Route::get('/detail', function () {
    return view('detail');
})->name('home.detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Categories
Route::get('/categories', 'CategoryController@index')->name('category');
Route::get('/categories/create', 'CategoryController@indexCreate')->name('category.create.index');
Route::get('/categories/update/{id}', 'CategoryController@indexUpdate')->name('category.update.index');
Route::post('/categories/add', 'CategoryController@create')->name('category.create');
Route::post('/categories/update', 'CategoryController@update')->name('category.update');


// Products
Route::get('/products/create/{categoryId}', 'ProductController@indexCreate')->name('product.create.index');
Route::get('/product/update/{categoryId}/{productId}', 'ProductController@indexUpdate')->name('product.update.index');
Route::post('/product/create', 'ProductController@create')->name('product.create');
Route::post('/product/update', 'ProductController@update')->name('product.update');
Route::get('/product/delete/{id}', 'ProductController@delete')->name('product.delete');