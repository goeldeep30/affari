<?php
  include 'db_conn.php';
  // sql to create user
  $sql = sprintf("insert into users values(%s,'%s','%s','%s');",$_POST['uid'],$_POST['f_name'],$_POST['l_name'],$_POST['pwd']);
  if ($conn->query($sql) === TRUE) {
      echo "task assigned successfully";
  } else {
      echo "Error asssigning task: " . $conn->error;
  }
  echo $sql;
  $conn->close();
 ?>
