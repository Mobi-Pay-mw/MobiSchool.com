<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Repository extends Model
{
    use HasFactory;

    public function lesson():BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }

    public function module():HasOneThrough
    {
        return $this->hasOneThrough(Modules::class, Lesson::class);
    }
}
