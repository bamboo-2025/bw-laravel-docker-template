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

// 追加
Route::get('/todo',  'TodoController@index');
Route::get('/todo/create', 'TodoController@create')->name('todo.create');; // 追記。ボタンを押下した際にリクエストするルートを定義する。ルートの定義に->name('ルート名')を記述して名前付きルートを定義。