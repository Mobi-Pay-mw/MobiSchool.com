<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Department extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'faculty_id'];

    public function faculty(): BelongsTo
    {
        # code...
        return $this->BelongsTo(Faculty::class);
    }

    public function programme(): BelongsToMany
    {
        return $this->belongsToMany(Programme::class);
    }

    public function classrooms():HasManyThrough
    {
        return $this->hasManyThrough(Classroom::class, Programme::class);
    }

}
