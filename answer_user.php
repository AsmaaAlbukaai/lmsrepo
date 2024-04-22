<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class answer_user extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=[
        'answers_Id',
        'users_Id',
    ];
    public function answer(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Answer::class,'answers');
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class,'users',
            'users_Id','answers_Id')->withTimestamps();
    }
}
