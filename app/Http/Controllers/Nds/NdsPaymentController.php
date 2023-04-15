<?php

namespace App\Http\Controllers\Nds;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NdsPaymentController extends Controller
{
    public function invoice(){
        $transcId =substr (md5(uniqid(rand(),true)), 0, 4);
        $tran=strtoupper($transcId);
        $transactionId = "WUFPRF".$today =date("Ymd").$tran;
        return view('nds.invoice')->with($transactionId);
    }
    private function checkInvoice()
    {

    }
}