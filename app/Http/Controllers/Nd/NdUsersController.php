<?php

namespace App\Http\Controllers\Nd;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NdUsersController extends Controller
{
    public function index(){
        // Get all the departments
         $data['programs'] =  Program::with('departments')->find( Auth::user()->program_id);


         $data['studentCourse'] = Course::find(Auth::user()->course_id);

         $data['studentDepartment'] = Department::find(Auth::user()->department_id);

         return view('nd/add-step-one')->with($data);

     }
}
