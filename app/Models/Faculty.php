<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }

    public function department()
    {
        # code...
        return $this->hasMany(Department::class);
    }
}
