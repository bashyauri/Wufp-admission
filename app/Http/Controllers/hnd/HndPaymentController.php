<?php

namespace App\Http\Controllers\hnd;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Services\Nds\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HndPaymentController extends Controller
{
    public function __construct(
        protected PaymentService $hndPaymentService
    ) {}
    public function invoice(){

        if ( $this->hasScreeningInvoice()){

           return  redirect()->route('hnd.payment');
        }

        $transactionId = $this->generateTransactionId();
        return view('hnd.invoice')->with(['transactionId' => $transactionId]);
    }
    public function makeAdmissionPayment(){
        $data = Payment::where(['student_id' =>auth()->user()->id,'resource' => 'Admission Payment'])->first();

         return view('hnd.payment')->with(json_decode($data,true));
    }
    public function generateInvoice(Request $request) {

        $data = $request->all();



        $valuesToHash = config('services.remita.MERCHANTID') . config('services.remita.ADMISSIONSERVICEID') .
        $data['transactionId']. $data['amount'] . config('services.remita.APIKEY');
        $data['apiHash'] = hash('sha512', $valuesToHash);
        try {
            $response = $this->hndPaymentService->generateInvoice($data);

                $data['RRR'] = $response->RRR;
                $data['statuscode'] = $response->statuscode;
                $data['status'] = $response->status;
                $this->hndPaymentService->createPayment($data);


            return redirect()->route('hnd.invoice')->with('success',$response->status );

        } catch (\Exception $ex) {
            Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['msgError' => 'Something went wrong:'.$response->status]);
        }


    }
    public function checkTransactionStatus($rrr){
        try {

            $response =PaymentService::getTransactionStatus($rrr);

            PaymentService::updateTransactionStatus($response->status,$response->RRR);

               // return view('nds.payment')->with($data);
            return redirect()->route('hnd.screening.payment')->with('success',$response->message );

        } catch (\Exception $ex) {
            Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['msgError' => 'Something went wrong:'.$response->message]);
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