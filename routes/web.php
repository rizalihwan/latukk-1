<?php

use Illuminate\Support\Facades\Route;
Route::middleware('guest')->group(function(){
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
    Route::prefix('siswa')->name('siswa.')->group(function(){
        Route::get('/daftar/siswa', 'DaftarController@index')->name('daftar');
        Route::post('/daftar/store', 'DaftarController@store')->name('store');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
