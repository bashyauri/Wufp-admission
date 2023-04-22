<?php

namespace App\Services\Nds;

use App\Models\Payment;

/**
 * Class PaymentService.
 */
class PaymentService
{
  public function generateInvoice(array $data){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://login.remita.net/remita/exapp/api/v1/send/api/echannelsvc/merchant/api/paymentinit',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS =>'{
        "serviceTypeId": "'.config('services.remita.ADMISSIONSERVICEID').'",
        "amount": "'.$data['amount'].'",
        "orderId": "'.$data['transactionId'].'",
        "payerName": "'.$data['payerName'].'",
        "payerEmail": "'.$data['payerEmail'].'",
        "payerPhone": "'.$data['payerPhone'].'",
        "description": "Payment For Admission",

    }',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: remitaConsumerKey='.config('services.remita.MERCHANTID').',remitaConsumerToken='.$data['apiHash']
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);


    return PaymentService::convertJsonToArray($response);


  }
  public static function convertJsonToArray(string $response='',bool $assoc = false): object
  {
    if($response[0] !== '[' && $response[0] !== '{') { // we have JSONP
        $response = substr($response, strpos($response, '('));
        return json_decode(trim($response,'();'), $assoc);
     }
     return json_decode(trim($response));

  }
  public function createPayment($data)
  {
    $values = $this->generateInvoice($data);
    if(!empty($values)){
        Payment::create([
            'transaction_id' => $data['transactionId'],
            'student_id' => auth()->user()->id,
            'amount' => $data['amount'],
            'date' => now(),
            'status' => $data['statuscode'],
            'resource' => $data['status'],
            'RRR' => $data['RRR']
        ]
        );

    }

  }


}
