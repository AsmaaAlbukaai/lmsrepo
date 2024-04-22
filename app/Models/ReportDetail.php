<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ReportDetail extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=[
        'attending',
        'users_Id',
        'answer_num_true',
    ];
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,'users_Id');
    }
}
