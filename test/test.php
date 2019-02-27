<?php
echo "hii";
$sms=urlencode("Dear Customer, Order Confirmation: Your Order for Apple iPhone has been successfully placed 000webhost.");
$phones="9919119905";
$url="https://smsleads.in/pushsms.php";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "username=ajay9905&password=Ajay22@&sender=BLUEIT&numbers=$phones&message=$sms");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$response = curl_exec($ch);
echo $response;
?>
