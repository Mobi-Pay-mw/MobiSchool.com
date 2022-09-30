<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    public function classe ()
    {
        return $this->belongsToMany(Classroom::class);
    }

    public function course()
    {
        return $this->hasMany(Course::class);
    }
}
