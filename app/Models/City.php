<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class City extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=[
        'name',
        'countries_Id',
    ];
    public function country(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Country::class,'countries_Id');
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(User::class,'cities_Id');
    }
    public function onsitecourse(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(OnSiteCourse::class,'cities_Id');
    }
  
}
