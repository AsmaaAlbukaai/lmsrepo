<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class OnLineCourse extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=['type','age_allowed','details_Id','sections_Id',];

    public function detail(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Detail::class,'details_Id');
    }
    public function video(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Video::class,'on_line_courses_Id');
    }
    public function question(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Question::class,'on_line_courses_Id');
    }
    public function section(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Section::class,'sections_Id');
    }

}
