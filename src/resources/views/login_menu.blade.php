@extends('layouts.menu')

@section('title','loginMenu')

@section('css')
<link rel="stylesheet" href="{{ asset('css/homeLoginMenu.css') }}">
@endsection

@section('menuMain')
<div class="HomeMenu">
        <div class="HomeMenu_inner">
        <!-- HOME -->
        <a class="Home" href="/" ><h1>Home</h1></a>
        <!-- Registration -->
        <a class="Registration" href="/register"><h1>Registration</h1></a>
        <!-- Login -->
        <a class="Login" href="/login"><h1>Login</h1></a>
        </div>
</div>

@endsection