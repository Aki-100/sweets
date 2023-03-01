<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    use HasFactory;
    //Sweetに対するリレーション
    public function sweets()
    {
        return $this->hasMany(Sweet::class);
    }
    
    public function getByPrefecture(int $limit_count = 5)
    {
        return $this->sweets()->with('prefecture')->orderBy('updated_at', 'DESC')->paginate($limit_count);
        //Sweetモデル内のprefecture関数から取得した投稿を降順に並べて取得
    }
}