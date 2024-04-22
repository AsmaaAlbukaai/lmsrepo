<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Date extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=['date',];

    public function date_user(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(date_user::class,'dates_Id');
    }
}
