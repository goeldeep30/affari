<?php
  include 'db_conn.php';
  // sql to create user
  $sql = "insert into users values(9919119905,'demo22');";
  if ($conn->query($sql) === TRUE) {
      echo "user created successfully";
  } else {
      echo "Error creating user: " . $conn->error;
  }

  $conn->close();
 ?>
