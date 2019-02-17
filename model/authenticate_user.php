<?php
  session_start();
  include 'db_conn.php';
  // sql to create user
  $sql = sprintf("select mobile_num from users where mobile_num=%s and pwd='%s';",$_POST['uid'],$_POST['pwd']);

  if ($result=mysqli_query($conn,$sql)){
    // Fetch one and one
    if ($row=mysqli_fetch_row($result)){
        print("success");
        $_SESSION["user"] = $row[0];
      }else{
        print("failed");
      }
    }
    $conn->close();
    ?>
