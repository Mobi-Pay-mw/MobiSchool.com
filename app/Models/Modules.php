<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Modules extends Model
{
    use HasFactory;

    public function course():BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function lesson():HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public function asessment():HasManyThrough
    {
        return $this->HasManyThrough(Assesment::class, Lesson::class);
    }

    public function repo():HasManyThrough
    {
        return $this->hasManyThrough(Repository::class, Lesson::class);
    }
}
