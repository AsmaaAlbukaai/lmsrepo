<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Detail extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=['name','price','description',];

    public function onLineCourse(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(OnLineCourse::class,'details_Id');
    }
    public function onSiteCourse(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(OnSiteCourse::class);
    }
}
