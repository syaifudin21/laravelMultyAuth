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
    return view('welcome');
});

Route::get('guru/login', 'Guru\LoginController@form')->name('guru.login');
Route::post('guru/login/store', 'Guru\LoginController@login')->name('guru.login.store');
Route::post('guru/logout', 'Guru\LoginController@logout')->name('guru.logout');

Route::get('siswa/login', 'Siswa\LoginController@form')->name('siswa.login');
Route::post('siswa/login/store', 'Siswa\LoginController@login')->name('siswa.login.store');
Route::post('siswa/logout', 'Siswa\LoginController@logout')->name('siswa.logout');

Route::get('guru', 'Guru\HomeController@index')->name('guru.home');
Route::get('siswa', 'Siswa\HomeController@index')->name('siswa.home');
