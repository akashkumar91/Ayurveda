<?php
include 'Connection.php';
if(isset($_POST['editabout'])){
    // if(isset($_FILES['proimage1']))
   
    
    echo $About_heading=$_POST['About_heading'];
    echo $About_us_Description1=$_POST['About_us_Description1'];
    echo $About_us_Description2=$_POST['About_us_Description2'];
    echo $About_us_Description3=$_POST['About_us_Description3'];
     
    // echo $filename1=$_FILES['proimage1']['name'];
    // echo $filename1='Picture/'.$filename1;
    // echo $tmpname1=$_FILES['proimage1']['tmp_name'];

    // echo $filename2=$_FILES['proimage2']['name'];
    // echo $filename2='Picture/'.$filename2;
    // echo $tmpname2=$_FILES['proimage2']['tmp_name'];
    // 
        
         $query=mysqli_query($con,"UPDATE about_us SET About_us_heading='$About_heading',About_desc1='$About_us_Description1',About_desc2='$About_us_Description2',About_desc3='$About_us_Description3' WHERE ID=1");
         if(mysqli_affected_rows($con)>0){
            // header("location:viewproduct.php");
            header("Location:Aboutus.php?res=1");
         }
        else{
            echo 'failed'.mysqli_error($con);
        }
    
    }

?>