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

Route::get('home', 'HomeController@index')->name('home');

Route::get('contact', 'ContactController@contact')->name('contact.show');
Route::post('contact', 'ContactController@store')->name('contact.store');//お問い合わせデータベースに保存
Route::post('confirm', 'ContactController@confirm')->name('contact.confirm');//確認画面表示
Route::get('contact/thanks', 'ContactController@ShowThanks')->name('contact.thanks');//お問い合わせありがとうございます表示

Route::get('muzeum/{category}/{id}', 'MuzeumguideController@showMuzeum')->name('show.muzeum'); //詳細ページ
