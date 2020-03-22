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



Route::get('/', 'MuzeumguideController@index');  //トップページ

Route::get('muzeumguide/art', 'MuzeumguideController@category_art');         //各カテゴリーページ
Route::get('muzeumguide/history', 'MuzeumguideController@category_history');
Route::get('muzeumguide/nature', 'MuzeumguideController@category_nature');
Route::get('muzeumguide/science', 'MuzeumguideController@category_science');
