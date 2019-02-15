<?php
  include 'db_conn.php';
  // sql to create user
  $sql = "select * from projects;";
  if ($result=mysqli_query($conn,$sql)){
    // Fetch one and one
    while ($row=mysqli_fetch_row($result)){
      printf("
        <div class=\"card col-lg-4 col-md-6\" style=\"width: 18rem;\">
          <div class=\"card-body\">
          <h5 class='card-title'>%s</h5>
          <p class='card-text'>%s</p>
          <a href=\"projdashboard.html\" class=\"btn btn-primary\">Go somewhere</a>
          </div>
        </div>
        ",$row[1],$row[2]);

      }
    }
    $conn->close();
    ?>
     
