<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Review extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=[
        'rate',
        'on_line_course_users_Id',
    ];
    public function onlineuser(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(onLineCourse_user::class,'on_line_course_users_Id');
    }
}
