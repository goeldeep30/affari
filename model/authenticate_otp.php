<?php
  session_start();
  if(isset($_SESSION['new_otp']) && isset($_POST['new_otp'])){
  if($_POST['new_otp']==$_SESSION["new_otp"]){
    print("success");
    unset($_SESSION['new_otp']);
    $_SESSION['v_mob_num']=$_POST['v_mob_num'];
  }else{
    print("Wrong OTP: Try Again");
  }
}else {
  print("Unauthorized Access,try reloading application");
}

 ?>
