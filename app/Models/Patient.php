<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'phone',
        'address',
        'password',
        'remember_token',
    ];
}
