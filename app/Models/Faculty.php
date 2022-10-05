<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Faculty extends Model
{
    use HasFactory;
    protected $fillable = ["name", "institute_id"];

    public function institute(): BelongsTo
    {
        return $this->belongsTo(Institute::class);
    }

    public function department(): HasMany
    {
        # code...
        return $this->hasMany(Department::class);
    }

    public function programme():HasManyThrough
    {
        return $this->hasManyThrough(Programme::class, Department::class);
    }
}
