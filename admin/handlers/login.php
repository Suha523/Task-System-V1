<?php
session_start();
include("../../handlers/connect.php");
$email=$_POST['email'];
$password=$_POST['password'];

$sql = "SELECT * FROM admins WHERE email='$email'";
$query=mysqli_query($conn,$sql);
$emailCount=mysqli_num_rows($query);
$adminData=mysqli_fetch_array($query);
if( $emailCount > 0){
    if(password_verify($password,$adminData['password'])){
        $_SESSION['id']=$adminData['id'];
        $_SESSION['name']=$adminData['name'];
        header("location: ../addUser.php");
    }else{
        $_SESSION['error']="Invalid Password";
        header("location: ../login.php");
    }
}else{
    $_SESSION['error']="Invalid Email";
    header("location: ../login.php");
}