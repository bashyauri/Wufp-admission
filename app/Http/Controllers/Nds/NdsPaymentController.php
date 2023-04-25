<?php

namespace App\Http\Controllers\Nds;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Services\Nds\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NdsPaymentController extends Controller
{
    public function __construct(
        public $ndsPaymentService = new PaymentService,
    ) {}
    public function invoice(){

        if ( $screeningDetail=$this->hasScreeningInvoice()){

           return  redirect()->route('nds.screening.payment');
        }

        $transactionId = $this->generateTransactionId();
        return view('nds.invoice')->with(['transactionId' => $transactionId]);
    }
    public function makeScreeningPayment(){
        $data = Payment::where(['student_id' =>auth()->user()->id,'resource' => 'Admission Payment'])->first();

         return view('nds.payment')->with(json_decode($data,true));
    }
    public function generateInvoice(Request $request) {

        $data = $request->all();


        $valuesToHash = config('services.remita.MERCHANTID') . config('services.remita.ADMISSIONSERVICEID') .
        $data['transactionId']. $data['amount'] . config('services.remita.APIKEY');
        $data['apiHash'] = hash('sha512', $valuesToHash);
        try {
            $response = $this->ndsPaymentService->generateInvoice($data);
                $data['RRR'] = $response->RRR;
                $data['statuscode'] = $response->statuscode;
                $data['status'] = $response->status;
                $this->ndsPaymentService->createPayment($data);

               // return view('nds.payment')->with($data);
            return redirect()->route('nds.invoice')->with('success',$response->status );

        } catch (\Exception $ex) {
            Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['msgError' => 'Something went wrong:'.$response->status]);
        }
        // CRYPT_SHA512(config('services.remita.ADMISSIONSERVICEID').
        // config('services.remita.APIKEY'));

    }
    public function checkTransactionStatus($transactionId){
        try {
            $response = $this->ndsPaymentService->checkTransactionStatus($transactionId);
            dd($transactionId);
                $data['RRR'] = $response->RRR;
                $data['statuscode'] = $response->statuscode;
                $data['status'] = $response->status;
                $this->ndsPaymentService->updatePayment($data);

               // return view('nds.payment')->with($data);
            return redirect()->route('nds.invoice')->with('success',$response->status );

        } catch (\Exception $ex) {
            Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['msgError' => 'Something went wrong:'.$response->status]);
        }
    }
    private function hasScreeningInvoice():object | null
    {
        return Payment::where(['student_id' =>auth()->user()->id,'resource' => 'Admission Payment'])->first();
    }
    private function generateTransactionId():string
    {
        $transcId =substr (md5(uniqid(rand(),true)), 0, 4);
        $tran=strtoupper($transcId);
        return "WUFPADM".$today =date("Ymd").$tran;
    }

}