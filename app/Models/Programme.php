<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;

    public function department()
    {
        # code...
        return $this->belongsToMany(Department::class);
    }

    public function classe ()
    {
        return $this->hasMany(Classroom::class);
    }
}
