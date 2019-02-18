<?php
session_start();
$_SESSION["task_id"]=$_POST['task_id'];
echo "task name get success "+$_SESSION["task_id"];
 ?>
