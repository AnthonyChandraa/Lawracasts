<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    use HasFactory;

    protected $primaryKey = ['user_id', 'course_id'];
    public $incrementing = false;

    protected function setKeysForSaveQuery($query){
        return $query->where('user_id', $this->getAttribute('user_id'))
            ->where('course_id', $this->getAttribute('course_id'));
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function courseHeader(){
        return $this->belongsTo(CourseHeader::class);
    }
}
