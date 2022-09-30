<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public function assessment()
    {
        return $this->belongsTo(Assesment::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
