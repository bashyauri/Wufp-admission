<?php

namespace App\Http\Controllers\Nds;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NdsPaymentController extends Controller
{
    public function invoice(){

        $transactionId = $this->generateTransactionId();
        return view('nds.invoice')->with(['transactionId' => $transactionId]);
    }
    private function checkInvoice()
    {

    }
    private function generateTransactionId():string
    {
        $transcId =substr (md5(uniqid(rand(),true)), 0, 4);
        $tran=strtoupper($transcId);
        return "WUFPADM".$today =date("Ymd").$tran;
    }
}