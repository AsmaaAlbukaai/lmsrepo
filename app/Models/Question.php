<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Question extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=[
        'questions',
        'true_ans',
        'mark',
        'tasks_Id',
        'on_line_courses_Id',
        'added_places_Id',
        ];
        public function online(): \Illuminate\Database\Eloquent\Relations\BelongsTo
        {
            return $this->belongsTo(OnLineCourse::class,'on_line_courses_Id');
        }
        public function task(): \Illuminate\Database\Eloquent\Relations\BelongsTo
        {
            return $this->belongsTo(Task::class,'tasks_Id');
        }
        public function added(): \Illuminate\Database\Eloquent\Relations\BelongsTo
        {
            return $this->belongsTo(Added_place::class,'added_places_Id');
        }
}
