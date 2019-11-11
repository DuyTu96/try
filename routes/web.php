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

//Client
Route::get('/','ClientController@index');

Auth::routes();
//admin
Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth',
], function () {
    Route::get('/', 'HomeController@index')->name('admin.dashboard');
    //users
    Route::get('/users/index','Admin\UserController@index')->name('admin.users.index');
    Route::get('/users/create','Admin\UserController@create')->name('admin.users.create');
    Route::get('/users/edit/{id}','Admin\UserController@edit')->name('admin.users.edit');
    Route::post('/users/create','Admin\UserController@store');
    Route::put('/users/edit/{id}','Admin\UserController@update');
    Route::get('/users/delete/{id}','Admin\UserController@destroy')->name('admin.users.delete');
    //categories
    Route::get('/categories/index','Admin\CategoryController@index')->name('admin.categories.index');
    Route::get('/categories/create','Admin\CategoryController@create')->name('admin.categories.create');
    Route::get('/categories/edit/{id}','Admin\CategoryController@edit')->name('admin.categories.edit');
    Route::post('/categories/index','Admin\CategoryController@store');
    Route::put('/categories/edit/{id}','Admin\CategoryController@update');
    Route::get('/categories/delete/{id}','Admin\CategoryController@destroy')->name('admin.categories.delete');
    //products
    Route::get('/products/index','Admin\ProductController@index')->name('admin.products.index');
    Route::get('/products/create','Admin\ProductController@create')->name('admin.products.create');
    Route::get('/products/edit/{id}','Admin\ProductController@edit')->name('admin.products.edit');
    Route::post('/products/create','Admin\ProductController@store');
    Route::put('/products/edit/{id}','Admin\ProductController@update');
    //orders
    Route::get('/orders/index','Admin\OrderController@index')->name('admin.orders.index');
    Route::get('/orders/create','Admin\OrderController@create')->name('admin.orders.create');
    Route::get('/orders/processed','Admin\OrderController@processed')->name('admin.orders.processed');
});
