<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class OnSiteCourse extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=['student_num','details_Id','countries_Id','cities_Id',];
    public function detail(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Detail::class,'details_Id');
    }
    public function countries(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Country::class,'countries_Id');
    }
    public function cities(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(City::class,'cities_Id');
    }
}
