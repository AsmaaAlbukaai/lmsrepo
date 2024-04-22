<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Interactive extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=['like','comment','user_videos_Id',];

    public function userVideos(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(user_video::class,'user_videos_Id');
    }
}
