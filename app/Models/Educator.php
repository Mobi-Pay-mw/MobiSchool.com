<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educator extends Model
{
    use HasFactory;

    public function lesson()
    {
        # code...
        return $this->hasMany(Lesson::class);
    }
}
