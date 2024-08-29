@extends('layouts.menu')

@section('title','menu')

@section('css')
<link rel="stylesheet" href="{{ asset('css/homeLoginMenu.css')}}">
@endsection


@section('menuMain')
<div class="HomeMenu">
        <div class="HomeMenu_inner">
<!-- HOME -->
        <form class="Home" action="/" method="GET">
        <button type="submit" class="button-link"><h1>Home</h1></button>
        </form>
<!-- Logout -->
        <form class="Logout" action="/logout" method="POST">
        @csrf
        <button type="submit" class="button-link"><h1>Logout</h1></button>
        </form>
<!-- MyPage -->
        <form class="Home" action="/mypage" method="GET">
        <button type="submit" class="button-link"><h1>Mypage</h1></button>
        </form>
        </div>
</div>
@endsection