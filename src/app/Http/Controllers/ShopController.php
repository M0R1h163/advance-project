<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Favorite;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        //favoriteとuserでwithしてデータ抽出・・・・
        $shops = Shop::with(['area', 'genre'])->get();
        $areas = Area::all();
        $genres = Genre::all();
        $favorites = Favorite::all();
        $param = ['shops' => $shops ,'areas' => $areas , 'genres' => $genres, 'favorites' => $favorites];
        return view('index',$param);
    }


}
