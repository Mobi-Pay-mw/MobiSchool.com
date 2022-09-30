<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;


    public function module()
    {
        return $this->belongsTo(Modules::class);
    }

    public function repo()
    {
        return $this->hasOne(Repository::class);
    }

    public function educator()
    {
        return $this->belongsTo(Educator::class);
    }
}
