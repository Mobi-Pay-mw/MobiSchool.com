<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    public function student():BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function book():BelongsTo
    {
        return $this->belongsTo(Library::class);
    }
}
