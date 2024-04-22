<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Added_place extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'place',
    ];

    public function question(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Question::class,'added_places_Id');
    }
}
