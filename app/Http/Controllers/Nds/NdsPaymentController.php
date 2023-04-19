<?php

namespace App\Http\Controllers\Nds;

use App\Http\Controllers\Controller;
use App\Services\Nds\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NdsPaymentController extends Controller
{
    public function __construct(
        public $ndsPaymentService = new PaymentService,
    ) {}
    public function invoice(){

        $transactionId = $this->generateTransactionId();
        return view('nds.invoice')->with(['transactionId' => $transactionId]);
    }
    public function generateInvoice(Request $request) {
        $data = $request->all();

        $valuesToHash = config('services.remita.MERCHANTID') . config('services.remita.ADMISSIONSERVICEID') .
        $data['transactionId']. $data['amount'] . config('services.remita.APIKEY');
        $data['apiHash'] = hash('sha512', $valuesToHash);
        try {
            $response = $this->ndsPaymentService->generateInvoice($data);
            if($response->statusCode==025){
                return redirect()->route('nds.invoice')->with('success','Invoice Generated');
            }
            return redirect()->back()->withErrors(['msgError' => $response->status]);

        } catch (\Exception $ex) {
            Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['msgError' => 'Something went wrong']);
        }
        // CRYPT_SHA512(config('services.remita.ADMISSIONSERVICEID').
        // config('services.remita.APIKEY'));

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