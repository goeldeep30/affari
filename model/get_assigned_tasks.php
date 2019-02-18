<?php
  session_start();
  include 'db_conn.php';
  // sql to create user
  $sql = sprintf("select * FROM tasks WHERE (pid in (select pid from projects where p_owner=%s)) union(select * FROM tasks WHERE t_assigned_to=%s);",$_SESSION["user"],$_SESSION["user"]);
  if ($result=mysqli_query($conn,$sql)){
    // Fetch one and one
    while ($row=mysqli_fetch_row($result)){
      printf("
      <div  class=\"row\">


      <div class=\"col-sm-4\">
    <div class=\"card\" style=\"width: 21rem;\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">%s</h5>
        <p class=\"card-text\"></p>
        <a onclick=\"get_proj_members()\" href=\"#\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#members_modal\">Assign Task</a>
      </div>
    </div>
    </div>

  </div>
        ",$row[2],$row[3]);

      }
    }
    $conn->close();
    ?>
