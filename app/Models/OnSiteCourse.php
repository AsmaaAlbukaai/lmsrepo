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
}
