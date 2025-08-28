<?php

namespace App\Http\Controllers;

// 追加
use App\Todo;

use Illuminate\Http\Request;//追記

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
    //追加
    public function create()
    {
        // TODO: 第1引数を指定
        return view('todo.create'); // 追記。view関数は「画面を表示したい」ときに使う関数。「return view('フォルダ名.ファイル名');」
    }
    // <ここまで>

    public function store(Request $request)// 追記。$requestにRequestクラスのインスタンスを代入している。Laravelでは、メソッドの引数の左側にクラス名を書くことで、インスタンス化が自動で行われる。これを「メソッドインジェクション」と呼ぶ。
{
    $inputs = $request->all(); // 追記からの変更
    // dd($inputs); // 追記

    // 1. todosテーブルの1レコードを表すTodoクラスをインスタンス化
    $todo = new Todo(); 

    // $todo->user_id = Auth::id(); // ログインしている攻撃者のユーザID：～を代入

    // 2. Todoインスタンスのカラム名のプロパティに保存したい値を代入
    $todo->fill($inputs);//変更
     // 3. Todoインスタンスの`->save()`を実行してオブジェクトの状態をDBに保存するINSERT文を実行
    $todo->save();

    return redirect()->route('todo.index'); // 追記
}
    public function show($id)
    {
        $model = new Todo();
        $todo = $model->find($id);
        // find()メソッドを使用して、指定のIDのデータを取得します。
        // データベースのidカラムが$idの値と一致するレコードを取得しています。
    
        return view('todo.show', ['todo' => $todo]); // 追記
    }
}

