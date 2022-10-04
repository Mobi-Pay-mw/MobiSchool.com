<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Lesson extends Model
{
    use HasFactory;


    public function module():BelongsTo
    {
        return $this->belongsTo(Modules::class);
    }

    public function course():HasOneThrough
    {
        return $this->hasOneThrough(Course::class, Modules::class);
    }

    public function assessment():HasOne
    {
        return $this->hasOne(Assesment::class);
    }

    public function grades():HasManyThrough
    {
        return $this->hasManyThrough(Grade::class, Assesment::class);
    }

    public function repo():HasMany
    {
        return $this->hasMany(Repository::class);
    }

    public function educator():BelongsTo
    {
        return $this->belongsTo(Educator::class);
    }
}
