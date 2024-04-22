<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pdf extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=['name','path','photos_Id','on_line_courses_Id',];
    public function online(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(OnLineCourse::class,'on_line_courses_Id');
    }
    public function photo():\Illuminate\Database\Eloquent\Relations\MorphOne{
return $this->morphOne('App\Models\Photo','imagable');
    }
}
