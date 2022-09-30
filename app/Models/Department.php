<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Department extends Model
{
    use HasFactory;

    public function faculty()
    {
        # code...
        return $this->BelongsTo(Faculty::class);
    }

    public function programme()
    {
        return $this->hasMany(Programme::class);
    }

}
