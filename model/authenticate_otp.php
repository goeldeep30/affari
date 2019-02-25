<?php
  session_start();
  if(isset($_SESSION['new_otp']) && isset($_POST['new_otp'])){
  if($_POST['new_otp']==$_SESSION["new_otp"]){
    print("success");
    unset($_SESSION['new_otp']);
  }else{
    print("Wrong OTP: Try Again");
  }
}else {
  print("Unauthorized Access,try reloading application");
}

 ?>
