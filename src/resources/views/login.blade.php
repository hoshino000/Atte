@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css')}}">
@endsection

@section('content')
    <h1 class="content-title">
        ログイン
    </h1>

    <div class="login-form">
        <input type="hidden" name="name" value="{{ $users['name'] }}" placeholder="お名前">
    </div>

    <div class="login-form">
        <input type="hidden" name="email" value="{{ $users['email'] }}" placeholder="メールアドレス">
    </div>

    <div class="login-form">
        <input type="hidden" name="password" value="{{ $users['password'] }}" placeholder="パスワード">
    </div>

    <button type="submit">ログイン</button>

    <div class="content-text__note">
        アカウントをお持ちでない方はこちらから
    </div>
    <a href="login/" style="text-decoration:none;">会員登録</a>

@endsection