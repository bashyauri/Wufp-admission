<?php

namespace App\Http\Controllers\Nds;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboards.student.nds.default');
    }
}