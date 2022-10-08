<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ["assesment_id", "question", "answer", "marks", "Option_1", "Option_2", "Option_3", "Option_4"];

    public function assessment ():BelongsTo
    {
        return $this->belongsTo(Assesment::class);
    }
}
