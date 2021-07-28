<?php
  session_start();  
  if(!isset($_SESSION['admin'])){
  header("location: ../admin/login.php");
  }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="//localhost/SIMS/assets/css/font-awesome.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="//localhost/SIMS/assets/css/adminlte.css">
  <link href="//localhost/SIMS/assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
   

    <!-- SEARCH FORM -->
   

    <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-slide="true" href="logout.php">
          <i class="fa fa-key"></i> logout
        </a>
      </li>
    </ul>
   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
     
      <!-- Sidebar Menu -->
       <?php  include "../sidebar.php"; ?>
      <!-- /.sidebar-menu -->
   

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h2 class="m-0 text-dark text-center">Add Course</h2>
            
            <?php
               if(!empty($_SESSION['success'])){
                  echo '<h4 class="alert alert-success text-center">'.$_SESSION['success'].' </h4>';
                  unset($_SESSION['success']);
               }
              if(!empty($_SESSION['error'])){
                    echo '<h4 class="alert alert-success text-center">'.$_SESSION['error'].' </h4>';
                  unset($_SESSION['error']);
               }
             ?>
            
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                 <form class="form-horizontal" role="form" action = "//localhost/SIMS/admin/handlers/addCourseHandler.php" method = "POST" enctype = "multipart/form-data">
               
                <div class="form-group">
                    <label for="firstName" class="control-label">Course Code</label>
                    <div class="col-sm-">
                        <input type="text" name="course_code"  placeholder="course code" class="form-control" autofocus>
                    </div>
                </div>
              
                <div class="form-group">
                    <label for="password" class="control-label">Course Title</label>
                    <div class="">
                        <input type="text" name="course_title" placeholder="course title" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label  class=" control-label">Credit Units</label>
                    <div>
                        <select class = "form-control" name = "credit_units">
                                     <option value = "">--</option>
                                    <option value = "1">1</option>
                                    <option value = "2">2</option>
                                    <option value = "3">3</option>
                                    <option value = "4">4</option>
                                    <option value = "5">5</option>
                                   
                        </select>
                        
                    </div>
                </div>
                 <div class="form-group">
                    <label  class=" control-label">Semester</label>
                    <div>
                        <select class = "form-control" name = "semester">
                                    
                                    <option value = "1">1</option>
                                    <option value = "2">2</option>
                                   
                                   
                        </select>
                        
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="control-label">Department</label>
                  <select class="form-control" name="department">
                  <option value="">--</option>
                <?php
                  require_once '../../connection.php';
                  $sql = "SELECT * FROM departments";
                  $result = $conn->query($sql);
                  while ($row = $result->fetch()) {
                  
                 echo "<option value = ".$row['id']." >".$row['department_name']."</option>";
                  }           
                ?>
                  </select>
                </div>

                <div class="form-group">
                    <div class="">
                        <button type="submit" class="btn btn-success btn-block" name = "submit">Submit</button>
                    </div>
                </div>
            </form> <!-- /form -->
            </div>
        </div>
        <!-- /.row -->
       
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer" style="margin-top: 410px">
    
    <strong>Copyright &copy; 2018 <a href="#">Ahmadu Bello University. Zaria</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery <script src="../assets/js/jquery.min.js"></script> -->
<!-- Bootstrap -->


<script type="text/javascript" src="//localhost/SIMS/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="//localhost/SIMS/assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="//local/SIMS/assets/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="//localhost/SIMS/assets/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->


<!-- PAGE PLUGINS -->
<!-- SparkLine -->



<!-- PAGE SCRIPTS -->

</body>
</html>
