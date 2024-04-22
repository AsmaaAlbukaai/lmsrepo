<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Roadmap extends Model
{

    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=[
        'time',
        'sections_Id',
    ];
    public function section(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Section::class,'sections_Id');
    }
}
