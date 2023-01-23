<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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

    protected $keyType = 'string';

    public function watchlists(){
        return $this->hasMany(Watchlist::class);
    }

    public function userLogs(){
        return $this->hasMany(UserLog::class);
    }

    public function courseHeaders(){
        return $this->hasMany(CourseHeader::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function forums(){
        return $this->hasMany(Forum::class);
    }

    public function podcasts(){
        return $this->hasMany(Podcast::class);
    }
}
