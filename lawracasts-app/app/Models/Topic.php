<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    public function forums(){
        return $this->hasMany(Forum::class);
    }

    public function courseHeaders(){
        return $this->hasMany(CourseHeader::class);
    }
}
