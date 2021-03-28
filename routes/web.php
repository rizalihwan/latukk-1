<?php

use Illuminate\Support\Facades\Route;
Route::middleware('guest')->group(function(){
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
    Route::get('/daftar/siswa', 'DaftarController@index')->name('siswa.daftar');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
