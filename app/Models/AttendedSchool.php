<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendedSchool extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','school_name','certificate_obtained','year'];
}