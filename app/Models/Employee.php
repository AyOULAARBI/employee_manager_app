<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'registration_num',
        'full_name',
        'address',
        'city',
        'email',
        'phone',
        'departement',
        'hired_at',

        ];
}
