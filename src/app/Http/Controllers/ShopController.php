<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $shops = Shop::all();
        $hasAreas = Shop::has('area')->get();
        $hasGenres = Shop::has('genre')->get();
        $param = ['shops' => $shops ,'hasAreas' => $hasAreas , 'hasGenres' => $hasGenres];
        return view('index',$param);
    }
}
