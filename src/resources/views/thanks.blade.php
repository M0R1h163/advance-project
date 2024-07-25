@extends('layouts.app')

@section('title','Thanks')

@section('css')
<link rel="stylesheet"  href="{{ asset('css/thanks.css') }}">
@endsection

@section('appMain')
<div class="main">
    <div class="form_area" >
        <div class="form_inner">
            <h1>会員登録ありがとうございます</h1>
            <form action="" >
                <button class="button_thanks">ログインする</button>
            </form>
        </div>
    </div>
</div>
@endsection