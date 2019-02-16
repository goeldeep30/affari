<?php
  include 'db_conn.php';
  // sql to create user
  $sql = sprintf("insert into users values(%s,'deep','goel','%s');",$_POST['uid'],$_POST['pwd']);
  if ($conn->query($sql) === TRUE) {
      echo "user created successfully";
  } else {
      echo "Error creating user: " . $conn->error;
  }
  echo $sql;
  $conn->close();
 ?>
