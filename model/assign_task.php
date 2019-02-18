<?php
  session_start();
  include 'db_conn.php';
  // sql to create user
  $sql = sprintf("update tasks set t_assigned_to=%s where tid=%s and pid=%s;",$_POST['selected_user'],$_SESSION['task_id'],$_SESSION["proj_id"]);
  if ($conn->query($sql) === TRUE) {
      echo "task assigned successfully";
  } else {
      echo "Error asssigning task: " . $conn->error;
  }
  echo $sql;
  $conn->close();
 ?>
