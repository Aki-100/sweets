<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    
    public function sweets()
    //Sweetに対するリレーション
    {
        return $this->hasMany(Sweet::class);
    }
    
    public function getByRegion(int $limit_count = 5)
    //Regionごとに属する投稿を5件まで取得
    {
        return $this->sweets()->with('region')->orderBy('updated_at', 'DESC')->paginate($limit_count);
        //Sweets関数を参照し、その中のSweetモデル内のregion関数から取得した投稿を降順に並べて取得
        //ペジネーション機能を追加
    }
}