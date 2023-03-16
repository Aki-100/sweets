<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class like extends Model
{
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
    
}
