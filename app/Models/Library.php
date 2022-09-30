<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    public function course()
    {
        # code...
        return $this->belongsToMany(Course::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
