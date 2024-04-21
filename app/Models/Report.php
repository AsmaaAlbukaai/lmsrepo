<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Report extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=[
        'admin_name',
        'course_name',
        'student_number',
    ];
}
