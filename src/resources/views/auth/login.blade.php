@extends('layouts.app')

@section('title','login')

@section('css')
<link rel="stylesheet" href="{{ asset('css/loginRegister.css') }}">
<!-- メールアイコン -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

@endsection

@section('appMain')

    <div class="form">
        <form action="/login" method="POST" class="login_form">
            @csrf
            <div class="top_form"><b>Login</b></div>
                <div class="login_inner_form">
                    <div class="contents_item">
                        <!-- メールアドレス入力欄 -->
                        <div class="adjust">
                            <label class="material-icons image" for="txtEmail">email</label>
                            <input class="txt" type="email" value="{{ old('email') }}" id="txtEmail" placeholder="Email"/>
                        </div>
                        <!-- パスワード入力欄 -->
                        <div class="adjust">
                            <label class="material-icons image" for="txtPassWord" >lock</label>
                            <input class="txt" type="password" value="{{ old('password') }}" id="txtPassWord" placeholder="PassWord"/>
                        </div>
                    </div>
                    <button class="button_login">ログイン</button>
                </div>
        </form>
    </div>

@endsection

