<?php
  include 'db_conn.php';
  // sql to create user
  $sql = "select * from users;";
  if ($result=mysqli_query($conn,$sql)){
    // Fetch one and one
    while ($row=mysqli_fetch_row($result)){
      printf($row[0]);
      }
    }
    $conn->close();
    ?>
