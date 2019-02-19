<?php
  session_start();
  include 'db_conn.php';
  // sql to create user
  $sql = sprintf("select * FROM tasks WHERE t_status='in_progress' AND pid=%s AND (pid in (select pid from projects where p_owner=%s   )) union(select * FROM tasks WHERE pid=%s and t_assigned_to=%s AND t_status='in_progress');",$_SESSION["proj_id"],$_SESSION["user"],$_SESSION["proj_id"],$_SESSION["user"]);
  if ($result=mysqli_query($conn,$sql)){
    // Fetch one and one
    while ($row=mysqli_fetch_row($result)){
      printf("
      <div id=\"inprogress_card\" class=\"card border-primary text-black bg-light mb-3\">
        <div data-toggle=\"collapse\" data-target=\"#%s\" >
        <div class=\"card-header\">Assigned to: <b>%s</b></div>
        <div class=\"card-body text-primary\">
          <h5 class=\"card-title\">%s</h5>
          <p class=\"card-text\">%s</p>
        </div>
      </div>
      <div id=\"%s\" class=\"collapse\" >
        <button onclick=\"change_task_status(%s,'to do')\" type=\"button\" class=\"btn btn-info\">&larr; To do</button>
        <button type=\"button\" class=\"btn btn-info\">Details</button>
        <button onclick=\"change_task_status(%s,'done')\" type=\"button\" class=\"btn btn-info\">Done &rarr;</button>
      </div>
    </div>
        ",$row[0],$row[5],$row[2],$row[3],$row[0],$row[0],$row[0]);

      }
    }
    $conn->close();
    ?>
