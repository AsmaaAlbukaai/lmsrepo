<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class RoadmapDetail extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=[
        'roadmaps_Id',
        'course_name',
    ];
    public function roadmaps(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Roadmap::class,'roadmaps_Id');
    }
}
