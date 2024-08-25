<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = ['area_id','genre_id'];
    
    //shop_all画面(エリア・ジャンル)表示用メソッド
    public function getAreaName(){
        return optional($this->area)->name;
    }

    public function getGenreName(){
        return optional($this->genre)->name;
    }

    //リレーション
    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function genre(){
        return $this->belongsTo(Genre::class);
    }
    
    public function favorite(){
        return $this->hasMany(Favorite::class);
    }
}
