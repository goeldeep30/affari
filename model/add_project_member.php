<?php
  session_start();
  include 'db_conn.php';
  // sql to create user
  $sql = sprintf("select mobile_num from users where mobile_num=%s;",$_POST['member_id']);
  if ($result=mysqli_query($conn,$sql)){
    // Fetch one and one
    if ($row=mysqli_fetch_row($result)){
      $sql_add_user = sprintf("insert into project_members values(%s,%s);",$_SESSION["proj_id"],$_POST['member_id']);
      if ($conn->query($sql_add_user) === TRUE) {
          echo "member added successfully";
      } else {
          echo "Error adding in member: " . $conn->error;
      }
    }else{
      echo "No such user found";
    }

    }
    $conn->close();
    ?>
