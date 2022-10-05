<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Classroom extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'programme_id'];

    public function programme(): BelongsTo
    {
        return $this->belongsTo(Programme::class);
    }

    public function curriculum(): HasOne
    {
        return $this->hasOne(Curriculum::class);
    }
}
