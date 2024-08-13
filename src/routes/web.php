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

Route::get('/homeMenu',[AuthController::class,'homeMenu']);
Route::get('/loginMenu',[AuthController::class,'loginMenu']);


Route::get('/', [ShopController::class,'index']);
Route::post('/favorite',[ShopController::class,'favoriteBtn']);

Route::get('/login',[AuthController::class,'login']);
Route::get('/mypage',[AuthController::class,'mypage']);
Route::get('/logout',[AuthController::class,'logout']);


Route::get('/register',[AuthController::class,'register']);
Route::get('/done',[AuthController::class,'done']);

Route::get('/thanks',[AuthController::class,'thanks']);

Route::get('/detail',[AuthController::class,'detail']);










