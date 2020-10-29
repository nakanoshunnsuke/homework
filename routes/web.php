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
// ログイン画面を表示

use Illuminate\Support\Facades\Auth;
Route::get('/','BlogController@showWelcome');
// ブログ一覧を表示
Route::get('/blog','BlogController@showList')->name('blogs');
// ブログ一覧を表示
Route::get('/blog/create','BlogController@showCreate')->name('create');
// ブログ一覧を表示
Route::post('/blog/store','BlogController@exeStore')->name('store');
// ブログ詳細画面を表示
Route::get('/blog/{id}','BlogController@showDetail')->name('show');
// ブログ詳細画面を表示
Route::get('/blog/edit/{id}','BlogController@showEdit')->name('edit');
Route::post('/blog/update','BlogController@exeUpdate')->name('update');
// ブログ削除
Route::post('/blog/delete/{id}','BlogController@exeDelete')->name('delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
