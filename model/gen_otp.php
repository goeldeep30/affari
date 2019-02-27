<?php
  session_start();
  function generateNumericOTP($n) {
    $generator = "1357902468";
    $result = "";
    for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand()%(strlen($generator))), 1);
    }
    return $result;
}

$n = 4;
$_SESSION["new_otp"]=generateNumericOTP($n);
print_r($_SESSION["new_otp"]);
print("\n");
print($_POST['v_mob_num']);


$txt=sprintf("Dear Customer,your otp is %s.",$_SESSION["new_otp"]);
$sms=urlencode($txt);
$phones=$_POST['v_mob_num'];
$url="https://smsleads.in/pushsms.php";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "username=ajay9905&password=Ajay22@&sender=BLUEIT&numbers=$phones&message=$sms");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$response = curl_exec($ch);

 ?>
