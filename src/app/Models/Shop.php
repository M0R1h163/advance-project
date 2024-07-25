<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    // protected $fillable = ['area_id','genre_id'];
    
    //shop_all画面(エリア・ジャンル)表示用
    public function getTitle(){
        return '#'.optional($this->area)->name.' '.'#'.optional($this->genre)->name;
    }

    //リレーション
    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

    public function genre(){
        return $this->belongsTo('App\Models\Genre');
    }
}
