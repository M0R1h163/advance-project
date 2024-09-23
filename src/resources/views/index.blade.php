@extends('layouts.app')

@section('title','Shop_all')

@section('css')
<Link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
<!-- favoriteアイコン用 -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

<!-- HEADER部分 -->
@section('appSearch')
@if (Auth::check())
<div class="header_search">
    <form action="/" method="GET" class="header_form">
        @csrf
        <select name="" id="" class="select">
            <option value='' selected="selected" disabled>All area</option>
            @foreach($areas as $area)
            <option class="select_tag" value="{{ $area->id }}">{{ $area->name }}</option>
            @endforeach
        </select>
        <select name="" id="" class="select">
            <option value='' selected="selected" disabled>All genre</option>
            @foreach($genres as $genre)
            <option class="select_tag" value="{{ $genre->id }}" placeholder="All genre">{{ $genre->name }}</option>
            @endforeach
        </select>
        <label class="material-icons image search" for="search">search</label>
            <input class="search_box" type="search" id="search" placeholder="Search...">
    </form>
@endif
</div>

@endsection

<!-- BODY部分 -->
@section('appMain')
<div class="shop_main">
@if (Auth::check())
@foreach ($shops as $shop)
<div class="card">
    <div class="card__img">
        <img src="{{ $shop->image }}" alt="" />
    </div>
    <div class="card__content">
        <h2 class="card__content-shop">
            {{ $shop->name }}
        </h2>
        <div class="card__content-areaGenre">
            <p class="card__content-p">
                #{{ $shop->getAreaName() }}
            </p>
            <p class="card__content-p">
                #{{ $shop->getGenreName() }}
            </p>
        </div>
        <div class="card__content-cat">
            <button class="detail_btn">
                <label class="card_detail" for="">詳しくみる</label>
            </button>
            <!-- お気に入りボタン -->
            <form action="/favorite/{{ $shop->id }}" method="POST">
            @csrf
                @php
                    $favorite = Auth::user()->favorite()->where('shop_id',$shop->id)->first()
                @endphp
            @if (!$favorite)
                <!-- お気に入り登録が存在しないとき -->
                <button type="submit" class="favorite_btn" id="favoriteBtn" name="status" value="1" >
                    <label class="material-icons image_gray" for="favoriteBtn">favorite</label>
                </button>
            @else
            <!-- お気に入り登録が存在 -->
                @if ($favorite->status == 1)
                <button type="submit" class="favorite_btn" id="favoriteBtn" name="status">
                    <label class="material-icons image_red" for="favoriteBtn">favorite</label>
                </button>
                @else
                <button type="submit" class="favorite_btn" id="favoriteBtn" name="status">
                    <label class="material-icons image_gray" for="favoriteBtn">favorite</label>
                </button>
                @endif
            @endif
            </form>
        </div>
    </div>
</div>
@endforeach
@endif
@endsection