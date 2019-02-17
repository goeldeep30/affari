<?php
  session_start();
  include 'db_conn.php';
  // sql to create user
  $sql = sprintf("insert into tasks (pid,t_title,t_desc,t_status,t_assigned_to) values(%s,'%s','%s','%s',9919119905);",$_SESSION["proj_id"],$_POST['title'],$_POST['desc'],$_POST['status']);
  echo $sql;
  if ($conn->query($sql) === TRUE) {
      echo "task created successfully";
  } else {
      echo "Error creating task: " . $conn->error;
  }

  $conn->close();
 ?>
