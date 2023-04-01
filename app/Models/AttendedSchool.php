<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendedSchool extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','primary_school_name','secondary_school_name','tertiary_school_name','primary_year','secondary_school_year','tertiary_school_year'];
}