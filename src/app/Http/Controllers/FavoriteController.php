<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Shop;
use App\Models\Author;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    // public function favoriteBtn(Request $request){
    //     $favorites = Favorite::with(['user','shop'])->get();
    //     $favoriteBtn = Favorite::all()->status;
    //     if($favorites){
    //         $favorites -> delete();
    //     }else{
    //         Favorite::create([
    //             'user_id' => $favorite->$user->id,
    //             'shop_id' => $favorite->$shop->id,
    //             ]);
    //     }
    //     return redirect('/',['favorites' => $favorites])->back();

    // NGなやつ以下のコード
        // public function favoriteBtn(Request $request){
        // $favorites = Favorite::with(['user','shop','favorite'])->get();
        // dd($favorites);
        // if($favorites =Favorite::where('status',true)->get()){
        //     $favorites -> delete($favorites);
        // }else if($favoriteBtn =Favorite::where('status',false)){
        //     Favorite::create($favorites);
        // }
        // return redirect('/',['favorites' => $favorites]);
    }

    // }
// }
