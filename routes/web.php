<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminRole;
use App\Http\Middleware\UserRole;
use App\Http\Middleware\ServiceRole;
Auth::routes();
//bu route laravelin kendi auth sistemi içerisinde gelen route yapısı bu route ile giriş yapma çıkış yapma register gibi işlemler yapılıyor

Route::middleware([UserRole::class])->group(function () {


Route::group(['namespace' => 'User'], function () {
        Route::get('/', 'UserController@index')->name('home');
        Route::get('/urun/ekle', 'UserController@ekleview')->name('ekleView');
        Route::post('/urun/ekle/post', 'UserController@eklePost')->name('urunekle');
        Route::get('/urun/list', 'UserController@List')->name('list');
        Route::post('/urun/deleted', 'UserController@delete')->name('deleteUser');
        Route::get('/urun/details/{id}', 'UserController@details')->name('orderDetails');
        Route::get('/urun/list/Aktif', 'UserController@activateList')->name('activateList');

    });
});

Route::middleware([ServiceRole::class])->group(function () {

    Route::group(['namespace' => 'Service'], function () {
        Route::get('/admin', 'YetkiliController@index')->name('adminHome');
    });
});

Route::get('/yetkisiz-giris', function () {
    return view('auth.auth-alert');
    });


