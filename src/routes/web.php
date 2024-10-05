<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\FavoriteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// ログインメニュー
Route::get('/loginMenu',[AuthController::class,'loginMenu']);
// 会員登録thanksメニュー
Route::get('/thanks', [AuthController::class, 'thanks'])->name('thanks');
//戻るボタン(X)
Route::get('/back',[AuthController::class,'back']);

/* ログイン後 */
Route::middleware('auth')->group(function () {
    Route::get('/', [ShopController::class,'index']);
    Route::get('/homeMenu',[AuthController::class,'homeMenu']);
    // //戻るボタン(X)
    // Route::get('/back',[AuthController::class,'back']);
    Route::get('/search',[ShopController::class,'search']);
    Route::post('/favorite/{shop}',[FavoriteController::class,'favoriteBtn']);

});










// Route::get('/thanks',[AuthController::class,'thanks']);
// Route::get('/', [ShopController::class,'index']);






// Route::post('/favorite',[ShopController::class,'favoriteBtn']);
// Route::get('/mypage',[AuthController::class,'mypage']);



// Route::get('/done',[AuthController::class,'done']);



// Route::get('/detail',[AuthController::class,'detail']);










