<?php
  session_start();
  include 'db_conn.php';
  // sql to create user
  $sql = sprintf("update tasks set t_status='%s' where tid=%s and pid=%s;",$_POST['task_status'],$_POST['task_id'],$_SESSION["proj_id"]);
  if ($conn->query($sql) === TRUE) {
      echo "status changed successfully";
  } else {
      echo "Error changing status: " . $conn->error;
  }
  echo $sql;
  $conn->close();
 ?>
