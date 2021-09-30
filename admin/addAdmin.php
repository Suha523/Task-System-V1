<?php
 
 include("includes/header.php");
 include("includes/sidebar.php");
 ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add New Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add New Admin</li>
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
                <h3 class="card-title">Add New Admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="handlers/add_admin.php" method="post">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Admin Name</label>
                    <input type="text" name="aname" class="form-control" id="exampleInputEmail1" placeholder="Enter admin name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Admin Email</label>
                    <input type="email" name="aemail" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Admin Password</label>
                    <input type="password" name="apassword" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Admin Type</label>
                    <select name="atype" class="form-control" id="exampleFormControlSelect1">
                        <option value="0">Admin</option>
                        <option value="1">Super Admin</option>
                    </select>
                </div>
                </div>
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Admin</button>
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