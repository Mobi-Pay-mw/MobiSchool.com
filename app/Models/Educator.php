<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Educator extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    protected $guard = 'educator';

    // eloquent realtionship functions

    public function lesson():HasMany
    {
        # code...
        return $this->hasMany(Lesson::class);
    }

    public function assessment():HasOneThrough
    {
        return $this->hasOneThrough(Assesment::class, Lesson::class);
    }

    // functions

    public function setPasswordAttribute($password){
        return $this->attributes['password'] = bcrypt($password);
    }

}
