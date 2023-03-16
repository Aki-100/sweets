<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sweet extends Model 

{
    use SoftDeletes;
    use HasFactory;
    
    //sweet各種投稿データ保存
    protected $fillable = [
        'name',
        'description',
        'image_url',
        'user_id',
        'region_id',
        'prefecture_id',
    ];
    
    public function user()
    //Userに対するリレーション
    {
        return $this->belongsTo(User::class);
    }
    
    public function likes()
    //Likeに対するリレーション
    {
        return $this->hasMany(Like::class);
    }
    
    public function comments()
    //Commentに対するリレーション
    {
        return $this->hasMany(Comment::class);
    }
    
    public function region()
    //Regionに対するリレーション
    {
        return $this->belongsTo(Region::class);
    }
    
    public function prefecture()
    //Prefectureに対するリレーション
    {
        return $this->belongsTo(Prefecture::class);
    }


    public function getPaginateByLimit(int $limit_count = 5)
    //取得データの最大件数を5件に指定
    {
        return $this::with('region','prefecture')->orderBy('updated_at','DESC')->paginate($limit_count);
        //region関数とprefecture関数を参照し、最新の更新から順に取得
        //paginateで制限をかけてレコードを取得
    }
    
}