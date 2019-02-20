<?php
  session_start();
  include 'db_conn.php';
  // sql to create user
  $sql = sprintf("select p_member from project_members where pid=%s;",$_SESSION["proj_id"]);
  if ($result=mysqli_query($conn,$sql)){
    // Fetch one and one
    print("<table class=\"table\">");
    while ($row=mysqli_fetch_row($result)){
      printf("<tr><td>%s</td></tr>",$row[0]);
      // printf("<tr><td>%s</td></tr>",$row[0]);
      }
      print("</table>");
    }
    $conn->close();
    ?>
