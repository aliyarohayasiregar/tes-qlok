<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/EmployeeDetail.php
class EmployeeDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'experience',
        'job_title',
        'job_desc',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
