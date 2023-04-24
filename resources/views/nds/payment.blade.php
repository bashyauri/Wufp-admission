<html lang="en">
   <head>
      <title>Remita Regular Invoice Processing Sample</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <style type="text/css">
         .button {background-color: #1CA78B;  border: none;  color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 4px 2px;  cursor: pointer;  border-radius: 4px;}
         input {  max-width: 30%;}
      </style>
   </head>
   <body>
      <div class='preserveHtml' class='preserveHtml' class="container mt-3">
         <h2 class='preserveHtml' class='preserveHtml' class='preserveHtml'>Remita Regular Invoice Processing Demo</h2>
         <p class='preserveHtml' class='preserveHtml' class='preserveHtml'>Try out our Payment Gateway</p>
         <form id="payment-form">
            <div class='preserveHtml' class='preserveHtml' class="form-floating mb-3 mt-3">
               <input type="hidden" value="{{$RRR}}" class="form-control" id="js-firstName"  name="rrr"/>
               <label for="rrr">Payment Reference:{{$RRR}}</label>
            </div>
            <input type="button" onclick="makePayment()" value="Submit" button class="button"/>
         </form>
      </div>
      <script type="text/javascript" src="https://login.remita.net/payment/v1/remita-pay-inline.bundle.js"></script>
      <script>
        function makePayment() {
          return new Promise((resolve, reject) => {
            var randomnumber = Math.floor(Math.random() * 1101233);
            var form = document.querySelector("#payment-form");
            var rrr = document.querySelector('input[name="rrr"]').value;

            var paymentEngine = RmPaymentEngine.init({
                key:"QzAwMDAyNzEyNTl8MTEwNjE4NjF8OWZjOWYwNmMyZDk3MDRhYWM3YThiOThlNTNjZTE3ZjYxOTY5NDdmZWE1YzU3NDc0ZjE2ZDZjNTg1YWYxNWY3NWM4ZjMzNzZhNjNhZWZlOWQwNmJhNTFkMjIxYTRiMjYzZDkzNGQ3NTUxNDIxYWNlOGY4ZWEyODY3ZjlhNGUwYTY=",
                processRrr: true,
                transactionId: "{{$transactionId}}",

                extendedData: {
                    customFields: [
                        {
                            name: "rrr",
                            value: rrr
                        }
                     ]
                },
                onSuccess: function (response) {
                    console.log('callback Successful Response', response);
                    resolve(response);
                },
                onError: function (response) {
                    console.log('callback Error Response', response);
                    reject(response);
                },
                onClose: function () {
                    console.log("closed");
                    reject("Payment window closed.");
                }
            });
            paymentEngine.showPaymentWidget();
          });
        }
        </script>
