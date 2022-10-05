<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class Programme extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function department():BelongsToMany
    {
        # code...
        return $this->belongsToMany(Department::class);
    }

    public function classe (): HasOneOrMany
    {
        return $this->hasMany(Classroom::class);
    }
}
