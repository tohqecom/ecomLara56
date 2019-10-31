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

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index');
    Route::group(['prefix' => 'category'], function(){
        Route::get('/', 'AdminCategoryController@index')->name('admin.get.list.category');
        Route::get('/create', 'AdminCategoryController@create')->name('admin.get.create.category');
        Route::post('/create', 'AdminCategoryController@store')->name('admin.post.create.category');
        Route::get('/update/{id}', 'AdminCategoryController@edit')->name('admin.post.edit.category');
        Route::post('/update/{id}', 'AdminCategoryController@update');
        Route::get('/{action}/{id}', 'AdminCategoryController@action')->name('admin.post.action.category');
    });
    Route::group(['prefix' => 'product'], function(){
        Route::get('/', 'AdminProductController@index')->name('admin.get.list.product');
        Route::get('/create', 'AdminProductController@create')->name('admin.get.create.product');
        Route::post('/create', 'AdminProductController@store')->name('admin.post.create.product');
        Route::get('/update/{id}', 'AdminProductController@edit')->name('admin.post.edit.product');
        Route::post('/update/{id}', 'AdminProductController@update');
        Route::get('/{action}/{id}', 'AdminProductController@action')->name('admin.post.action.product');
    });
    Route::group(['prefix' => 'transaction'], function(){
        Route::get('/', 'AdminTransactionController@index')->name('admin.get.list.transaction');
        Route::get('/create', 'AdminTransactionController@create')->name('admin.get.create.transaction');
        Route::post('/create', 'AdminTransactionController@store')->name('admin.post.create.transaction');
        Route::get('/update/{id}', 'AdminTransactionController@edit')->name('admin.post.edit.transaction');
        Route::post('/update/{id}', 'AdminTransactionController@update');
        Route::get('/{action}/{id}', 'AdminTransactionController@action')->name('admin.post.action.transaction');
    });
    Route::group(['prefix' => 'user'], function(){
        Route::get('/', 'AdminUserController@index')->name('admin.get.list.user');
        Route::get('/create', 'AdminUserController@create')->name('admin.get.create.user');
        Route::post('/create', 'AdminUserController@store')->name('admin.post.create.user');
        Route::get('/update/{id}', 'AdminUserController@edit')->name('admin.post.edit.user');
        Route::post('/update/{id}', 'AdminUserController@update');
        Route::get('/{action}/{id}', 'AdminUserController@action')->name('admin.post.action.user');
    });
});
