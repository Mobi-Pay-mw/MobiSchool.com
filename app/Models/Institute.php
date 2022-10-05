<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Institute extends Model
{
    use HasFactory;

    protected $fillable = ["name"];


    public function faculty(): HasMany
    {
        # code...
        return $this->hasMany(Faculty::class);
    }

    public function department(): HasManyThrough
    {
        return $this->hasManyThrough(Department::class,Faculty::class);
    }
}
