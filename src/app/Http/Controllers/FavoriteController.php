<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Shop;
use App\Models\User;                //Userモデル不要？
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function favoriteBtn(Request $request,$shop){

    $form = $request->input('status');
    $user = Auth::user();
    // ユーザーがお気に入り登録済みか確認
    $favorite = Favorite::where('user_id',$user->id )
                        ->where('shop_id', $shop)
                        ->first();
    if (!$favorite) {
        // お気に入り登録がない場合、新規登録
        Favorite::create([
            'user_id' => $user->id,
            'shop_id' => $shop,
            'status' => $form
        ]);
    } else {
        // 既存の登録がある場合、ステータスを更新
        $updFavoriteStatus = $favorite->status== 1 ? 0 : 1 ;
        $favorite->update(['status' => $updFavoriteStatus]);
    }

    return redirect('/');
    }
}