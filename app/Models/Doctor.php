<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'specialize',
        'phone',
        'address',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
