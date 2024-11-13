@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('content')
    <h1 class="content-text__title">
        会員登録
    </h1>

    <div class="login-form">
        <input type="hidden" name="name" value="{{$users['name']}}" placeholder="お名前">
    </div>

    <div class="login-form">
        <input type="hidden" name="email" value="{{$users['email']}}" placeholder="メールアドレス">
    </div>

    <div class="login-form">
        <input type="hidden" name="password" value="{{$users['password']}}" placeholder="パスワード">
    </div>

    <button type="submit">会員登録</button>

    <div class="content-text__note">
        アカウントをお持ちの方はこちらから
    </div>
    <a href="login/" style="text-decoration:none;">ログイン</a>

@endsection