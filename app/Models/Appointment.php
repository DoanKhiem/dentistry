<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'patient_id',
        'doctor_id',
        'service_id',
        'time',
        'status',
        'price',
    ];
}
