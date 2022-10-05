<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Educator extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function lesson():HasMany
    {
        # code...
        return $this->hasMany(Lesson::class);
    }

    public function assessment():HasOneThrough
    {
        return $this->hasOneThrough(Assesment::class, Lesson::class);
    }
}
