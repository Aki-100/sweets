<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comment extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    public function user()
    //Userに対するリレーション
    {
        return $this->belongsTo(User::class);
    }
    
    public function sweet()
    //Sweetに対するリレーション
    {
        return $this->belongsTo(Sweet::class);
    }
    
    protected $fillable = [
        'comment',
        'image_url',
        'user_id',
        'sweet_id',
    ]; 
    
    public function getPaginateByComment(int $limit_count = 5)
    //取得データの最大件数を15件に指定
    {   
        return $this::with('sweet')->orderBy('updated_at', 'DESC')->paginate($limit_count);
        //Sweetモデル内のSweet関数を参照し、Comments関数から取得した投稿を降順に並べて取得
        //ペジネーション機能を追加

    }
}