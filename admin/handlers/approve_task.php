<?php

session_start();
include("../../handlers/connect.php");
$tid=$_GET['taskid'];
$sql="UPDATE tasks SET status=1 WHERE id=$tid";
if(mysqli_query($conn, $sql)){
    $_SESSION['success']="The Task Is approved";
    header("location: ../showTasks.php");
}
