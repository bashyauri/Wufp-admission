<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function programs(){
        // return $this->belongsToMany(Program::class);
        return $this->belongsToMany(Program::class, 'department_program');
    }
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

}