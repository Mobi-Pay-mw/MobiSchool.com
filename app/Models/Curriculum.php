<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Curriculum extends Model
{
    use HasFactory;
    protected $fillable = ['classroom_id', 'name'];

    public function classe (): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }

    public function courses():BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }
}
