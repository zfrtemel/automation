<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
//bu route laravelin kendi auth sistemi içerisinde gelen route yapısı bu route ile giriş yapma çıkış yapma register gibi işlemler yapılıyor



Route::group(['namespace' => 'User'], function () {
    Route::get('/', 'UserController@index')->name('home');
    Route::get('/urun/ekle', 'UserController@ekleview')->name('ekleView');
    Route::post('/urun/ekle/post', 'UserController@eklePost')->name('urunekle');
    Route::get('/urun/list', 'UserController@List')->name('list');
    Route::post('/urun/deleted', 'UserController@delete')->name('deleteUser');

});



