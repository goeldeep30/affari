<?php
  session_start();
  include 'db_conn.php';
  // sql to create user
  $sql = sprintf("insert into projects (p_title,p_desc,p_owner) values('%s','%s',%s);",$_POST['title'],$_POST['desc'],$_SESSION["user"]);
  if ($conn->query($sql) === TRUE) {
      echo "project created successfully";
  } else {
      echo "Error creating project: " . $conn->error;
  }
  echo $sql;
  $conn->close();
 ?>
