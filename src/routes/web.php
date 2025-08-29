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

Route::post('/todo', 'TodoController@store')->name('todo.store');//フォームが送信された時にリクエストする、新規作成処理のルートを設定。

Route::get('/todo', 'TodoController@index')->name('todo.index'); // ルート名の定義を追記

Route::get('/todo/{id}', 'TodoController@show')->name('todo.show');//詳細画面への遷移ボタンをクリックした際にリクエストするルートをRoute::get()を使用して定義する。
// /{id}の部分は、ルートパラメータと言います。
// 例えば、/todo/1や/todo/2の「1」や「2」のような変数の部分をルートパラメータと言います。
// {}で変数ということを示します。

Route::get('/todo/{id}/edit', 'TodoController@edit')->name('todo.edit');//詳細画面と更新画面で画面を分けるため、編集画面のルートの最後には /edit を追加している。

Route::put('/todo/{id}', 'TodoController@update')->name('todo.update');//特定のToDo（/todo/{id}）に対して更新（put()）を行うルートを設定した。