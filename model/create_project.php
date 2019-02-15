<?php
  include 'db_conn.php';
  // sql to create user
  $sql = "insert into projects values(7,'demo title','demo desc',99119119905);";
  if ($conn->query($sql) === TRUE) {
      echo "project created successfully";
  } else {
      echo "Error creating project: " . $conn->error;
  }

  $conn->close();
 ?>
