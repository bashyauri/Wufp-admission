<?php

namespace App\Http\Controllers\hnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function invoice(){

        return view('nds.invoice');
    }
}