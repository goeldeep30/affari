<?php
  include 'db_conn.php';
  // sql to create user
  $sql = sprintf("insert into users values(%s,'%s','%s','%s');",$_SESSION["proj_id"],$_POST['uid'],$_POST['f_name'],$_POST['l_name'],$_POST['pwd']);
  if ($conn->query($sql) === TRUE) {
      echo "user created successfully";
  } else {
      echo "Error creating user: " . $conn->error;
  }
  echo $sql;
  $conn->close();
 ?>
