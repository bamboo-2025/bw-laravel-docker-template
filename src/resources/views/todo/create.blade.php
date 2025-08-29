  <!-- これより上の行削除 -->
@extends('layouts.base') 
@section('content') 
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">ToDo作成</div>
              <div class="card-body">
                <form method="POST" action="{{route('todo.store')}}">
                  <!-- 属性"method"は「フォームで送信する方法」（"POST"や"GET"）、"action"は「フォームの送信先（URL）」 -->
                 @csrf <!-- 追記 -->
                  <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">ToDo入力</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control @if($errors->has('content')) border-danger @endif" name="content" value="">
                    @if($errors->has('content'))
                    <!-- セッションに保存されたメッセージは、$errorsというグローバル変数を通してどのBladeからでも取得できる。$errorsはMessageBagクラスのインスタンスが代入されており、発生したバリデーションエラーの情報を持っている。 -->
                      <span class="text-danger">{{ $errors->first('content') }}</span>
                    @endif
                    </div>
                  </div>
                  <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">作成</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      @endsection <!-- 追記 -->
      <!-- これより下の行削除 -->