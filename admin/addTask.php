<?php
 
 include("../handlers/connect.php");
 include("includes/header.php");
 include("includes/sidebar.php");
 include("handlers/show_users.php");
 ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add New Task</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add New Task</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          <div class="card card-primary">
              <?php
                 if(isset($_SESSION['success'])){
                     ?>
                    <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Alert!</h5>
                   <?php 
                     echo $_SESSION['success'];
                     unset($_SESSION['success']);
                   ?>
                  </div>
                  
                  <?php
                 }
              ?>
            
              <div class="card-header">
                <h3 class="card-title">Add New Task</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="handlers/add_task.php" method="post">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control"  placeholder="Enter Task Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Email</label>
                    <textarea name="body" class="form-control"  placeholder="Enter Task Body"></textarea>
                  </div>
                  <div class="form-group">
                    <label >User</label>
                    <select class="custom-select" name="username">
                        <?php
                        while ($users=mysqli_fetch_assoc($queryGetUsers)){
                        ?>
                        <option value="<?=$users['id']?>"><?= $users['name'] ?></option>
                        <?php }
                        ?>
                    </select>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Task</button>
                </div>
              </form>
            </div>

          </div>
          <!-- /.col-md-6 -->
         
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
 <?php
 include("includes/footer.php");
?>