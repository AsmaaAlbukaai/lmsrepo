<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Section extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=[
        'name',
        'photos_Id',
    ];
    public function onlinecourse(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(OnLineCourse::class,'sections_Id');
    }
    public function roadmap(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Roadmap::class,'sections_Id');
    }
    public function photo():\Illuminate\Database\Eloquent\Relations\MorphOne{
        return $this->morphOne('App\Models\Photo','imagable');
            }
}
