<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    public function departments(){
        return $this->hasManyThrough(Department::class,DepartmentProgram::class,'program_id','id','id','department_id');
    }
    public function students()
    {
        return $this->hasMany(User::class);
    }
    // public function departments()
    // {
    //     return $this->belongsToMany(Department::class);
    // }
    public function courses() {
        return $this->hasMany(Course::class);
    }
}
