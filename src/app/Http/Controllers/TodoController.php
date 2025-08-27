<?php

namespace App\Http\Controllers;

// 追加
use App\Todo;

// use Illuminate\Http\Request;　S8で書かれていなかったから

class TodoController extends Controller
{
    // <ここから>
    public function index()
    {
// 追加
        $todo = new Todo();//インスタンス化
        $todos = $todo->all();//SQL文を組み立てず、todosテーブルから全てのレコードを取得することができる。
        // dd($todos);//デバッグ（PHP Appの時のvar_dumpと同じ役割）。Illuminate\Database\Eloquent\Collectionクラスのインスタンス。

        return view('todo.index',['todos' => $todos]); // 修正。view関数は画面に表示したいbladeファイルを第一引数で指定し、第二引数に渡したいデータを連想配列の形で渡すことができる。
    }
    // <ここまで>
}
