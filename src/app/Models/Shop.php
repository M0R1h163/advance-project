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

    //検索用リレーション
    public function scopeAreaSearch($query, $area_id)
    {
        if (!empty($area_id)) {
        $query->where('area_id', $area_id);
        }
    }

    public function scopeGenreSearch($query, $genre_id)
    {
        if (!empty($genre_id)) {
        $query->where('genre_id', $genre_id);
        }
    }

    public function scopeKeywordSearch($query, $keyword)
    {
        if (!empty($keyword)) {
        $query->where('name', 'like', '%' . $keyword . '%')
                ->orWhereHas('area', function ($subQuery) use ($keyword){
                    $subQuery->where('name', 'LIKE', '%' . $keyword . '%');
                })
                ->orWhereHas('genre', function ($subQuery) use ($keyword){
                    $subQuery->where('name', 'like', '%' . $keyword . '%');
                });
        }
    }
}
