<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Video extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=[
        'name',
        'path',
        'on_line_courses_Id',
        'on_line_course_users_Id',
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(user_video::class,'videos_Id');
    }
    public function onLineCourse(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(OnLineCourse::class,'on_line_courses_Id');
    }
    public function onLineCourseUser(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(onLineCourse_user::class,'on_line_course_users_Id');
    }
}
