<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class videoCall_user extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=[
        'video_calls_Id',
        'users_Id',
    ];
    public function videoCall(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(VideoCall::class,'video_calls');
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class,'users',
            'users_Id','video_calls_Id')->withTimestamps();
    }
}
