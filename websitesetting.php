<?php
  include 'Connection.php';
  if(isset($_POST['btnhome'])){
      echo $slogan=$_POST['slogan'];
      echo $heading=$_POST['heading'];
      echo $page_desc=$_POST['page_desc'];
      $query=mysqli_query($con,"UPDATE home_page SET slogan='$slogan',heading='$heading',page_description='$page_desc' WHERE ID=1 ");
      if(mysqli_affected_rows($con)>0){
       header("Location:Home.php?res=1");
    }
    else{
        echo mysqli_error($con);
    }
   
  }
?>