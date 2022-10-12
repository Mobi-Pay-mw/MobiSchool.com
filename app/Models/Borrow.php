<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Borrow extends Model
{
    use HasFactory;

    protected $fillable = [ 'student_id', 'transaction_id', 'library_id', 'borrow_date', 'return_date' ];

    public function students (): HasMany
    {
        return $this->hasMany( Student::class );
    }

    public function books (): HasMany
    {
        return $this->hasMany( Library::class );
    }

    public function tranaction (): HasOne
    {
        return $this->hasOne( Transaction::class );
    }
}
