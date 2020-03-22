<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', 'MuzeumguideController@index')->name('top');  //トップページ

Route::get('muzeum/{category}', 'MuzeumguideController@showCategory')->name('show.category');         //各カテゴリーページ

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
