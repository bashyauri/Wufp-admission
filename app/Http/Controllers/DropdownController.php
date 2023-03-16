<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DropdownController extends Controller
{
    public function index()

    {

        $data['countries'] = Department::get(["name", "id"]);

        return view('dropdown', $data);

    }
}