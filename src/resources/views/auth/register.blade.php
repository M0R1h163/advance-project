@extends('layouts.app')

@section('title','Register')

@section('css')
<link rel="stylesheet" href="{{ asset('css/loginRegister.css') }}">
<!-- メールアイコン -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('appMain')

<div class="main">
    <div class="form">
        <form action="/register" method="POST" class="registration_form">
            @csrf
            <div class="top_form"><b>Registration</b></div>
                <div class="registration_inner_form">
                    <div class="contents_item">
                        <!-- ユーザー入力欄 -->
                        <div class="adjust">
                            <label class="material-icons image" for="txtUsername">person_4</label>
                            <input class="txt" type="text" name="name" value="{{ old('name') }}" id="txtUsername"  placeholder="UserName"/>
                        </div>
                        <!-- メールアドレス入力欄 -->
                        <div class="adjust">
                            <label class="material-icons image" for="txtEmail">email</label>
                            <input class="txt" type="email" name="email" value="{{ old('email') }}" id="txtEmail" placeholder="Email"/>
                        </div>
                        <!-- パスワード入力欄 -->
                        <div class="adjust">
                            <label for="txtPassWord" class="material-icons image">lock</label>
                            <input class="txt" type="password" name="password" value="{{ old('password') }}" id="txtPassWord" placeholder="PassWord"/>
                        </div>
                        <button type="submit" class="button_registration">登録</button>
                    </div>
                </div>
        </form>
    </div>
</div>


@endsection