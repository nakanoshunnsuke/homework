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
use Illuminate\Support\Facades\Auth;
Auth::routes();

// ホーム画面を表示

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','BlogController@showWelcome');

// ブログ一覧を表示
Route::get('/blog','BlogController@showList')->name('blogs');
// ブログ登録フォームを表示
Route::get('/blog/create','BlogController@showCreate')->name('blog.create');
// ブログ登録
Route::post('/blog/store','BlogController@exeStore')->name('blog.store');
// ブログ詳細画面を表示
Route::get('/blog/{id}','BlogController@showDetail')->name('blog.show');
// ブログ編集画面を表示
Route::get('/blog/edit/{id}','BlogController@showEdit')->name('blog.edit');
Route::post('/blog/update','BlogController@exeUpdate')->name('blog.update');
// ブログ削除
Route::post('/blog/delete/{id}','BlogController@exeDelete')->name('blog.delete');




// 授業一覧を表示
Route::get('/tag','TagController@showList')->name('tags');
// 授業登録フォームを表示
Route::get('/tag/create','TagController@showCreate')->name('tag.create');
// 授業登録
Route::post('/tag/store','TagController@exeStore')->name('tag.store');
// 授業詳細画面を表示
Route::get('/tag/{id}','TagController@showDetail')->name('tag.show');
// 授業編集画面を表示
Route::get('/tag/edit/{id}','TagController@showEdit')->name('tag.edit');
Route::post('/tag/update','TagController@exeUpdate')->name('tag.update');
// 授業削除
Route::post('/tag/delete/{id}','TagController@exeDelete')->name('tag.delete');