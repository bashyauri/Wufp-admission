<?php

namespace App\Http\Controllers\Nds;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use App\Models\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['programs'] =  Program::find( auth()->user()->program_id);

        $data['studentCourse'] = Course::find(auth()->user()->course_id);
        $data['studentDepartment'] = Department::find(auth()->user()->department_id);
        return view('dashboards.student.nds.default')->with($data);
    }
}