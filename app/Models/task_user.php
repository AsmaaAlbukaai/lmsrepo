<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class task_user extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=[
        'tasks_Id',
        'users_Id',
    ];
    public function task(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Task::class,'tasks');
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class,'users',
            'users_Id','dates_Id')->withTimestamps();
    }
}
