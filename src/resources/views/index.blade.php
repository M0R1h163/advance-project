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
            @foreach($hasAreas as $shop)
            <option class="select_tag" value="" placeholder="All area">{{ optional($shop->area)->name }}</option>
            @endforeach
        </select>
        <select name="" id="" class="select">
            @foreach($hasGenres as $shop)
            <option class="select_tag" value="" placeholder="All genre">{{ optional($shop->genre)->name }}</option>
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
        <h2 class="card__content-ttl">
            {{ $shop->name }}
        </h2>
        <p class="card__content-p">
            {{ $shop->getTitle() }}
        </p>
        <div class="card__content-cat">
            <button class="detail_btn">
                <label class="card_detail" for="">詳しくみる</label>
            </button>
            <button class="favorite_btn">
                <label class="material-icons image" for="">favorite</label>
            </button>
        </div>
    </div>
</div>
@endforeach
</div>
@endsection