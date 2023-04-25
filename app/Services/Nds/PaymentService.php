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
        "description": "'.$data['description'].'"

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
            'resource' => $data['description'],
            'RRR' => $data['RRR']
        ]
        );

    }

  }
public static function getTransactionStatus(string $transactionId){
$secretKey ="23093b2bda801eece94fc6e8363c05fad90a4ba3e12045005141b0bab41704b3a148904529239afd1c9a3880d51b4018d13fd626b2cef77a6f858fe854834e54";
$valuesToHash = $secretKey.$transactionId;
$hash =hash('sha512', $valuesToHash);
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://remitademo.net/payment/v1/payment/query/{{$transactionId}}',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'publicKey: QzAwMDAyNzEyNTl8MTEwNjE4NjF8OWZjOWYwNmMyZDk3MDRhYWM3YThiOThlNTNjZTE3ZjYxOTY5NDdmZWE1YzU3NDc0ZjE2ZDZjNTg1YWYxNWY3NWM4ZjMzNzZhNjNhZWZlOWQwNmJhNTFkMjIxYTRiMjYzZDkzNGQ3NTUxNDIxYWNlOGY4ZWEyODY3ZjlhNGUwYTY=',
    'Content-Type: application/json',
    'TXN_HASH: {{hash}}'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

  }


}