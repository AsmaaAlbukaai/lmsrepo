<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstName',
        'email',
        'password',
        'lastName',
        'phone',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function notification(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Notification::class,'users_Id');
    }

    public function photo(): \Illuminate\Database\Eloquent\Relations\MorphOne
    {
        return $this->morphOne('App\Models\Photo','imagable');
    }
    public function reportDetail(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ReportDetail::class,'users_Id');
    }

    public function answerUser(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(answer_user::class,'users_Id');
    }
    public function video(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(user_video::class,'users_Id');
    }
    public function onLineCourse(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(onLineCourse_user::class,'users_Id');
    }
    public function dates(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(date_user::class,'users_Id');
    }
    public function feedback(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Feedback::class,'users_Id');
    }
    public function videoCall(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(VideoCall::class,'users_Id');
    }
    public function videoUser(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(videoCall_user::class,'users_Id');
    }


























}
