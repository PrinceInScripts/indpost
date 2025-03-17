<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'father_name', 'mother_name', 'employee_id', 'post', 
        'password', 'phone', 'otp', 'salary', 'joining_date', 'posting',
        's_o', 'job_status', 'photo', 'signature', 'eligible',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}

