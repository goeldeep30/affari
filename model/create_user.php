<?php
  session_start();
  include 'db_conn.php';
  if(isset($_SESSION['v_mob_num'])){
  // sql to create user
  $sql = sprintf("insert into users values(%s,'%s','%s','%s');",$_SESSION['v_mob_num'],$_POST['f_name'],$_POST['l_name'],$_POST['pwd']);
  if ($conn->query($sql) === TRUE) {
      echo "user created successfully";
  } else {
      echo "Error creating user: " . $conn->error;
  }
}else {
    echo "Error creating user: ";
  }
  echo $sql;
  $conn->close();
 ?>
