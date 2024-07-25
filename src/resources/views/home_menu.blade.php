@extends('layouts.menu')

@section('title','menu')

@section('css')
<link rel="stylesheet" href="{{ asset('css/homeLoginMenu.css')}}">
@endsection


@section('menuMain')

<div class="HomeMenu">
    <div class="HomeMenu_inner">
    <!-- HOME -->
            <a class="Home" href="/" ><h1>Home</h1></a>

    <!-- Logout -->
            <a class="Logout" href="/login"><h1>Logout</h1></a>
    <!-- MyPage -->
            <a class="Mypage" href="/myPage"><h1>Mypage</h1></a>
    </div>
</div>

@endsection