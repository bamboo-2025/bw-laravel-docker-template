<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    // <ここから>
    public function index()
    {
        return view('todo.index'); // 修正
    }
    // <ここまで>
}
