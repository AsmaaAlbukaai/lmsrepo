<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class onLineCourse_user extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=['on_line_courses_Id','users_Id',];
    public function onlinecourses(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(OnLineCourse::class,'on_line_courses');
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class,'users',
            'users_Id','on_line_courses_Id')->withTimestamps();
    }
    public function onlineusers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Review::class,'on_line_course_users_Id');
    }
}
