<?php
session_start();
include("../../handlers/connect.php");
$tid=$_GET['taskid'];
$sql="DELETE FROM tasks WHERE id=$tid";
if(mysqli_query($conn, $sql)){
    $_SESSION['success']="The Task Deleted Successfuly";
    header("location: ../showTasks.php");
}