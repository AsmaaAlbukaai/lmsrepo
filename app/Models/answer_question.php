<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class answer_question extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=[
        'answers_Id',
        'questions_Id',
    ];
    public function answer(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Answer::class,'answers');
    }
    public function question(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Question::class,'questions',
            'questions_Id','answers_Id');
    }
}
