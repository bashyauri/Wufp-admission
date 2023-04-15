<?php

namespace App\Http\Controllers\Nds;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NdsPaymentController extends Controller
{
    public function invoice(){

        return view('nds.invoice');
    }
    private function checkInvoice()
    {

    }
}
