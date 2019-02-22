<?php
  session_start();
  include 'db_conn.php';
  // sql to create user
  $sql = sprintf("select * from projects where (p_owner=%s) union (select * from projects where pid in (select pid from project_members where p_member=%s));",$_SESSION["user"],$_SESSION["user"]);
  if ($result=mysqli_query($conn,$sql)){
    // Fetch one and one
    if($row=mysqli_fetch_row($result)){
      printf("
        <div class=\"card col-lg-4 col-md-6\" >
          <div class=\"card-body\">
          <h5 class='card-title'>%s</h5>
          <p class='card-text'>%s</p>
          <a href=\"#\" onclick=\"select_proj('%s')\" class=\"btn btn-primary\">open</a>
          </div>
        </div>
        ",$row[1],$row[2],$row[0]);
        while ($row=mysqli_fetch_row($result)){
          printf("
            <div class=\"card col-lg-4 col-md-6\" >
              <div class=\"card-body\">
              <h5 class='card-title'>%s</h5>
              <p class='card-text'>%s</p>
              <a href=\"#\" onclick=\"select_proj('%s')\" class=\"btn btn-primary\">open</a>
              </div>
            </div>
            ",$row[1],$row[2],$row[0]);
          }
    }else{
      print("<img src=\"ico/empty.png\" class=\"img-rounded\" alt=\"Nothing To Display\">");
    }

    }
    $conn->close();
    ?>
