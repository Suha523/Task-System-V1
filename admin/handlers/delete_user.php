<?php
session_start();
include("../../handlers/connect.php");
$uid=$_GET['userid'];
$sql="DELETE FROM users WHERE id=$uid";
if(mysqli_query($conn, $sql)){
    $_SESSION['success']="The User Deleted Successfuly";
    header("location: ../showUsers.php");
}