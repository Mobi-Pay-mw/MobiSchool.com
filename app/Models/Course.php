<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function curriculum()
    {
        return $this->belongsToMany(Curriculum::class);
    }

    public function module()
    {
        return $this->hasMany(Modules::class);
    }

    public function book()
    {
        return $this->hasMany(Library::class);
    }
}
