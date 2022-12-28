<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseHeader extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    public function watchlists(){
        return $this->hasMany(Watchlist::class, 'course_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function topic(){
        return $this->belongsTo(Topic::class);
    }

    public function courseDetails(){
        return $this->hasMany(CourseDetail::class, 'course_id');
    }
}
