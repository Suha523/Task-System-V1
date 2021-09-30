<?php
session_start();
include("../../handlers/connect.php");

$name=$_POST['aname'];
$email=$_POST['aemail'];
$password=$_POST['apassword'];
$type=$_POST['atype'];

$password=password_hash($password, PASSWORD_DEFAULT);

$sql= "INSERT INTO admins(name, email, password, type) 
VALUES('$name', '$email', '$password', '$type')";
if(mysqli_query($conn, $sql)){
    $_SESSION['success']="The Admin Is Added Successfuly";
    header("location: ../addAdmin.php");
}