<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'birthplace',
        'introduction',
        'phone_number',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function sweets()
    //Sweetに対するリレーション
    {
        return $this->hasMany(Sweet::class);
    }
    
    public function likes()
    //Likeに対するリレーション
    {
        return $this->hasMany(Like::class);
    }
    
    public function islike($id)
    {
        return $this->likes()->where('sweet_id', $id)->exists();
    }
    
    public function comments()
    //Commentに対するリレーション
    {
        return $this->hasMany(Comment::class);
    }
    
}