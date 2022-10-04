<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Assesment extends Model
{
    use HasFactory;

    public function module():HasOneThrough
    {
        return $this->hasOneThrough(Modules::class, Lesson::class);
    }

    public function lesson ():BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }

    public function grade():HasMany
    {
        return $this->hasMany(Grade::class);
    }
}
