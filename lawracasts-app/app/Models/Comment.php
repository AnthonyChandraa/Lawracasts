<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $keyType = 'string';

    public function forum(){
        return $this->belongsTo(Forum::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
