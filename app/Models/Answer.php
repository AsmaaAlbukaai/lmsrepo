<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Answer extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=[
        'answer',
    ];
    public function answer_question(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(answer_question::class,'answers_Id');
    }
    public function answerUser(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(answer_user::class,'answers_Id');
    }
}
