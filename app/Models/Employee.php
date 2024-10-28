<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'ds_employees';
    protected $fillable = [
        'department_id',
        'education_level_id',
        'name',
        'last_name',
        'salary',
    ];

    //----
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    //----
    public function educationLevel()
    {
        return $this->belongsTo(EducationLevel::class);
    }
}
