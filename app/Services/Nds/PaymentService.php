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

    return json_decode($response);

  //   $jsonData = PaymentService::convertJsonToArray($response);
  //   dd($jsonData);


  //  if (isset($jsonData['statuscode']) && $jsonData['statuscode'] == '025') {
  //    Payment::create([
  //       'student_id' => auth()->user()->id,
  //       'transaction_id' => $data['transactionId'],
  //       'amount' => $data['amount'],
  //       'date' => now(),
  //       'status' =>$jsonData['statuscode'],
  //       'resource' => 'Payment For Admission',
  //       'RRR' => $jsonData['RRR'],
  //   ]);
  //   return dd($jsonData);
  //  }
  //      return dd($jsonData['status']);

  }
  public static function convertJsonToArray($response)
  {
    if (stripos($response, 'jsonp(') === 0) {
        // Extract the JSON data from the function call and decode it into a PHP associative array
        $json_data = substr($response, strlen('jsonp('), -1);
        return json_decode($json_data, true);
      } else {
        // Decode the JSON data into a PHP associative array
        return json_decode($response, true);
      }
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