@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css')}}">
@endsection

@section('content')
    <h1>{{ session('user_name') }}さんお疲れ様です！</h1>

    <div class="button-container">
        <form action="{{ route('atte.startWork') }}" method="POST">
            @csrf
            <button type="submit">勤務開始</button>
        </form>

        <form action="{{ route('atte.endWork') }}" method="POST">
            @csrf
            <button type="submit">勤務終了</button>
        </form>

        <form action="{{ route('atte.startBreak') }}" method="POST">
            @csrf
            <button type="submit">休憩開始</button>
        </form>

        <form action="{{ route('atte.endBreak') }}" method="POST">
            @csrf
            <button type="submit">休憩終了</button>
        </form>
    </div>

        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

@endsection