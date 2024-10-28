<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'ds_departments';
    protected $fillable = [
        'name',
        'city',
    ];

    //----
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
