@extends('layouts.app')

@section('title','Shop_all')

@section('css')
<Link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
<!-- favoriteアイコン用 -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

<!-- HEADER部分 -->
@section('appSearch')
<div class="header_search">
    <form action="/" method="get" class="header_form">
        <select name="" id="" class="select">
            <option value='' selected="selected" disabled>All area</option>
            @foreach($areas as $area)
            <option class="select_tag" value="">{{ $area->name }}</option>
            @endforeach
        </select>
        <select name="" id="" class="select">
            <option value='' selected="selected" disabled>All genre</option>
            @foreach($genres as $genre)
            <option class="select_tag" value="" placeholder="All genre">{{ $genre->name }}</option>
            @endforeach
        </select>
        <label class="material-icons image search" for="search">search</label>
            <input class="search_box" type="search" id="search" placeholder="Search...">
    </form>
</div>
@endsection

<!-- BODY部分 -->
@section('appMain')
<div class="shop_main">
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
            <form action="/favorite" method="POST" class="">
                @forelse ($favorites as $favorite)
                 @csrf
                <button type="submit" class="favorite_btn" id="{{ $favorite->id }}" name="status" value="1">
                    <label class="material-icons image_red" for="{{ $favorite->id }}">favorite</label>
                </button>
                @empty
                <!-- 空の時の処理内容を記載 -->
                 <button type="submit" class="favorite_btn" id="" name="status" value="0" >
                    <label class="material-icons image_gray" for="">favorite</label>
                </button>
                @endforelse
            </form>
        </div>
    </div>
</div>
@endforeach
</div>
@endsection