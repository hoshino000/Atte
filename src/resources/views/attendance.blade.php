@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css')}}">
@endsection

@section('content')
    <h1>勤怠情報</h1>

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

    <form action="{{ route('atte.attendance') }}" method="GET">
        <label for="date">日付を選択:</label>
        <input type="date" id="date" name="date" value="{{ $date }}">
        <button type="submit">確認</button>
    </form>

    <h2>{{ $date }}の勤怠情報</h2>

    <h3>作業情報</h3>
    <ul>
        @forelse($work as $workEntry)
            <li>{{ $workEntry->work_start }} - {{ $workEntry->work_end }}</li>
        @empty
            <li>作業情報はありません。</li>
        @endforelse
    </ul>

    <h3>休憩情報</h3>
    <ul>
        @forelse($breaks as $breakEntry)
            <li>{{ $breakEntry->break_start }} - {{ $breakEntry->break_end }}</li>
        @empty
            <li>休憩情報はありません。</li>
        @endforelse
    </ul>
@endsection