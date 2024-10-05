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

    public function search(Request $request){
        $area_id = $request->input('area');
        $genre_id = $request->input('genre');
        $keyword = $request->input('keyWordSearch');

        //検索メソッド
        $shops = Shop::with(['area','genre'])
                ->AreaSearch($area_id)
                ->GenreSearch($genre_id)
                ->KeywordSearch($keyword)
                ->get();

        //blade表示用(@foreach部分)
        $areas = Area::all();
        $genres = Genre::all();
        $favorites = Favorite::all();

        //表示用bladeのパラメータ格納
        $param = ['shops' => $shops ,'areas' => $areas , 'genres' => $genres, 'favorites' => $favorites];
        return view('index',$param);
    }
}
