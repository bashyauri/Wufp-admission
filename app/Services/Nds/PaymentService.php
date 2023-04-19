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
        "description": "Payment For Admission"
    }',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: remitaConsumerKey='.config('services.remita.MERCHANTID').',remitaConsumerToken='.$data['apiHash']
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $response = json_decode($response);
    if ($response['statuscode'] == 025){
        return Payment::insert([
            'student_id' => auth()->user()->id,
            'transaction_id' => $data['transactionId'],
            'amount' => $data['amount'],
            'date' => now(),
            'status' =>$response['statuscode'],
            'resource' => 'Payment For Admission',
            'RRR' => $response['RRR'],
        ]);
    }
    return $response;
  }






// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => '{{gateway-url}}/echannelsvc/merchant/api/paymentinit',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_POSTFIELDS =>'{
// 	"serviceTypeId": "4430731",
// 	"amount": "{{totalAmount}}",
// 	"orderId": "{{orderId}}",
// 	"payerName": "Michael Alozie",
// 	"payerEmail": "alozie@systemspecs.com.ng",
// 	"payerPhone": "09062067384",
// 	"description": "Payment for Donation 3",
// 	"customFields": [{
// 		"name": "Payer TIN",
// 		"value": "1234567890",
// 		"type": "ALL"
// 		},
// 		 {
// 		 "name": "Contract Date",
// 		"value": "2018/06/27",
// 		"type": "ALL"
// 		},
// 		 {
// 		 "name": "Tax Period",
// 		"value": "2018/06/20",
// 		"type": "ALL"
// 		}]
// }',
//   CURLOPT_HTTPHEADER => array(
//     'Content-Type: application/json',
//     'Authorization: remitaConsumerKey=2547916,remitaConsumerToken={{apiHash}}'
//   ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;


}