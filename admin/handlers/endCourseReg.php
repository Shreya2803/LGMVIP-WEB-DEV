 <?php
  $location = "location: ../index.php";
  session_start();
  if(!isset($_SESSION['admin'])){
  header("location: ../login.php");
  }
   require_once '../../connection.php';
   $status = '';
   $sql = "SELECT * FROM course_reg_status";
   $result = $conn->query($sql);
   while ($row = $result->fetch()) {
   	$status = $row['status'];
   }

   if($status == 0){
   	$_SESSION['success'] = "Course Registration Is Already Ended";
   	header($location);
   }
   else{
   	$sql = "UPDATE course_reg_status SET status = '0' WHERE 1";
   	$conn->query($sql);
    $_SESSION['success'] = "Course Registration Ended Successfully";
   	header($location);
   }

  ?>