<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Country extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=['name',];

    public function city(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(City::class,'cities_Id');
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(User::class,'countries_Id');
    }
    public function onsitecourse(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(OnSiteCourse::class,'countries_Id');
    }

}
