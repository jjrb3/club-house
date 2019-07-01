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
Route::get('/categories', 'Category\CategoryController@index')->name('category');
Route::get('/categories/create', 'Category\CategoryController@indexCreate')->name('category.create.index');
Route::post('/categories/add', 'Category\CategoryController@create')->name('category.create');