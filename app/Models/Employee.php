<?php

namespace App\Models;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dob',
        'status',
        'join_date',
    ];
    public function details()
    {
        
        return $this->hasOne(EmployeeDetail::class);
    }

  
}