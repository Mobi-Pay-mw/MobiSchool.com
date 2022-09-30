<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    public function programme()
    {
        return $this->belongsToMany(Programme::class);
    }

    public function curriculum()
    {
        return $this->hasOne(Curriculum::class);
    }
}
