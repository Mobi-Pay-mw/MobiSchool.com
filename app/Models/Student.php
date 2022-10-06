<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Student extends Model
{
    use HasFactory;

    public function grade():HasMany
    {
        # code...
        return $this->hasMany(Grade::class);
    }

    public function assessment():HasOneThrough
    {
        return $this->hasOneThrough(Assesment::class, Grade::class);
    }

    public function transaction():HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }
}
