<?php

Auth::routes();
Route::group(['message' => 'Auth'], function (){
    Route::get('/register', 'Auth\RegisterController@getRegister')->name('get.register');
    Route::post('/register', 'Auth\RegisterController@postRegister')->name('post.register');
    Route::get('/login', 'Auth\LoginController@getLogin')->name('get.login');
    Route::post('/login', 'Auth\LoginController@postLogin')->name('post.login');
    Route::get('/loadInUp', 'Auth\LoginController@getSignInOrUp')->name('get.loadinup');
    //password.request
    Route::get('/reset-password', 'Auth\ResetPasswordController@postLogin')->name('password.request');
});


Route::get('/', 'HomeController@index')->name('home');
Route::get('/catalog/{slug}-{id}', 'CatalogController@getListProducts')->name('get.list.product');
Route::get('/product/{slug}-{id}', 'CatalogController@getProductDetail')->name('get.detail.product');
