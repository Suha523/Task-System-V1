<?php
  $sql="SELECT tasks.id as id, users.name as name, tasks.title as title, tasks.status as status FROM tasks join users on users.id=tasks.user_id ";
  $queryGetTasks=mysqli_query($conn,$sql);
  
?>
