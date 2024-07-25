@extends('layouts.app')

@section('title','DONE')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('appMain')
<div class="main">
    <div class="done_area" >
        <div class="done_inner">
            <h1>ご予約ありがとうございます</h1>
            <form action="" >
                <button class="button_done">戻る</button>
            </form>
        </div>
    </div>
</div>
@endsection