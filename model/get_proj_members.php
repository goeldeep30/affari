<?php
  include 'db_conn.php';
  // sql to create user
  $sql = "select mobile_num from users;";
  if ($result=mysqli_query($conn,$sql)){
    // Fetch one and one
    while ($row=mysqli_fetch_row($result)){
      // printf("<option value=\"%s\">%s</option>",$row[0],$row[0]);
      printf("<tr><td>%s</td></tr>",$row[0]);
      }
    }
    $conn->close();
    ?>
