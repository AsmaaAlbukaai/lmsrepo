<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class VideoCall extends Model
{

    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=[
        'users_Id',
    ];
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,'users_Id');
    }
    public function videoUser(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(videoCall_user::class,'video_calls_Id');
    }
}
