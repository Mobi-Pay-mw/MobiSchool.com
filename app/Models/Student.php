<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password', 'classroom_id'];

    protected $guard = 'student';

    public function grade():HasMany
    {
        # code...
        return $this->hasMany(Grade::class);
    }

    public function assessment():HasOneThrough
    {
        return $this->hasOneThrough(Assesment::class, Grade::class);
    }

    public function transaction():HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }

    public function setPasswordAttribute($password){
        return $this->attributes['password'] = bcrypt($password);
    }
    
}
