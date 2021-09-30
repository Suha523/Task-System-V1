<?php
 
 include("../handlers/connect.php");
 include("includes/header.php");
 include("includes/sidebar.php");
 include("handlers/show_users.php")
 ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Show Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add New User</li>
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
            
              <!-- <div class="card-header">
                <h3 class="card-title text-center"> Users</h3>
              </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                    <div class="col-md-12">
                        <div id="example1_filter" class="dataTables_filter ml-5">
                            <label >Search: 
                                <input type="search" class="form-control form-control-sm">
                            </label>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
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
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row">
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                         Name
                      </th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                         Email
                      </th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                         Status
                      </th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                         Action
                      </th>
                           
                  </tr>
                  </thead>
                  <tbody>
                     <?php
                       while($user=mysqli_fetch_assoc($queryGetUsers)){
                           ?>
                          <tr>
                              <td><?= $user['name']?></td>
                              <td><?= $user['email']?></td>
                              <td><?php 
                              if( $user['status']==0){
                                 echo 'pending';
                              }else{
                                  echo 'approved';
                              }
                             ?></td>
                             <td>
                        <a href="handlers/delete_user.php?userid=<?= $user['id']?>"><i class="fas btn btn-danger fa-trash-alt"></i></a>
                        <a href="handlers/approve_user.php?userid=<?= $user['id']?>"><i class="fas btn btn-info ml-4 fa-check-square"></i></a>
                    </td>
                          </tr>
                           <?php
                       }
                     ?>
                     
                    
                  </tbody>
                  <tfoot>
                  <tr>
                      <th rowspan="1" colspan="1">Name</th>
                      <th rowspan="1" colspan="1">Email</th>
                      <th rowspan="1" colspan="1">Status</th>
                      <th rowspan="1" colspan="1">Action</th>
                    </tr>
                  </tfoot>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                    Showing 1 to 10 of 57 entries
                </div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example1_previous">
                            <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">
                                Previous
                            </a>
                        </li>
                        <li class="paginate_button page-item active">
                            <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">
                                1
                            </a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">
                                2
                            </a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">
                                3
                            </a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">
                                4
                            </a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">
                                5
                            </a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">
                                6
                            </a>
                        </li>
                        <li class="paginate_button page-item next" id="example1_next">
                            <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">
                                Next
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
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