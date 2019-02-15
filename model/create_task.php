<?php
  include 'db_conn.php';
  // sql to create user
  $sql = "insert into tasks values(5,1,'demo task title','demo task desc','demo status',9919119905);";
  if ($conn->query($sql) === TRUE) {
      echo "task created successfully";
  } else {
      echo "Error creating task: " . $conn->error;
  }

  $conn->close();
 ?>
