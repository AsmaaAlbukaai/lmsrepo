<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class user_video extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=[
        'users_Id',
        'videos_Id',
    ];
    public function video(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Video::class,'videos');
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class,'users',
            'users_Id','videos_Id')->withTimestamps();
    }
    public function interactiv(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Interactive::class,'user_videos_Id');
    }
}
