<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = ['score', 'assesment_id'];

    public function assessment():BelongsTo
    {
        return $this->belongsTo(Assesment::class);
    }

    public function student():BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function lesson():HasOneThrough
    {
        return $this->hasOneThrough(Lesson::class, Assesment::class);
    }
}
