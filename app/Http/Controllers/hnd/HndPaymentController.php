<?php

namespace App\Http\Controllers\hnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HndPaymentController extends Controller
{
    public function invoice(){


        return view('hnd.invoice');
    }

}