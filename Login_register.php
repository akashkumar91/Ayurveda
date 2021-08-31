<?php
 session_start();
  include 'Connection.php';
  if(isset($_POST['btnlogin'])){
     $userid = $_POST['email'];
     $password = $_POST['password'];
     $query=mysqli_query($con,"select * from admin_table where emailid='$userid' and PASSWORD='$password'");
     if(mysqli_affected_rows($con)>0){
         $query1=mysqli_query($con,"update admin_table set Login_status=1 where emailid='$userid'");
         if(mysqli_affected_rows($con)>0){
          $_SESSION['username']=$userid;
           header('location:dashboard.php');
    }
    else{
        echo 'You have already logged in';
    }
   }
    else{
      echo 'Login failed',mysqli_error($con);
   }
}   
?>