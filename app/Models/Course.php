<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    use HasFactory;
    protected $filled = ['name'];

    public function curriculum():BelongsToMany
    {
        return $this->belongsToMany(Curriculum::class);
    }

    public function module():HasMany
    {
        return $this->hasMany(Modules::class);
    }

    public function lesson():HasManyThrough
    {
        return $this->hasManyThrough(Lesson::class, Modules::class);
    }

    public function book():BelongsToMany
    {
        return $this->belongsToMany(Library::class);
    }

    public function category():BelongsTo
    {
        return $this->belongsTo( Category::class );
    }
}
