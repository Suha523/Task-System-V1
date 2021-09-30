<?php
 define("SERVER",'localhost:3308');
 define("USER",'root');
 define("PASS",'');
 define("DBNAME",'task_system');

$conn= mysqli_connect(SERVER,USER,PASS,DBNAME);
return $conn;
?>
