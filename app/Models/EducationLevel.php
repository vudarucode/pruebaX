<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
    use HasFactory;
    protected $table = 'ds_education_levels';
    protected $fillable = [
        'description'
    ];

    //----
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
