<?php
  include 'db_conn.php';
  // sql to create user
  $sql = sprintf("insert into projects (p_title,p_desc,p_owner) values('%s','%s',99119119905);",$_POST['title'],$_POST['desc']);
  if ($conn->query($sql) === TRUE) {
      echo "project created successfully";
  } else {
      echo "Error creating project: " . $conn->error;
  }
  echo $sql;
  $conn->close();
 ?>
