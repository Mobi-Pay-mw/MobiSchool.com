<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function grade()
    {
        # code...
        return $this->hasMany(Grade::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
