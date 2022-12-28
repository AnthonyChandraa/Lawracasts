<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetail extends Model
{
    use HasFactory;

    protected $primaryKey = ['course_id', 'title', 'video_url'];
    public $incrementing = false;

    protected function setKeysForSaveQuery($query){
        return $query->where('course_id', $this->getAttribute('course_id'))
            ->where('title', $this->getAttribute('title'))
            ->where('video_url', $this->getAttribute('video_url'));
    }

    public function courseHeader(){
        return $this->belongsTo(CourseHeader::class);
    }
}
