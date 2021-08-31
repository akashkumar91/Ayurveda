<?php
include 'Connection.php';
  if(isset($_POST['btndoctor'])){
    
    if(isset($_FILES['image'])){
     $Doctor_Id=$_POST['Doctor_Id'];
     $doctor_name=$_POST['doctor_name'];
   
     $fee=$_POST['fee'];
     $Experience=$_POST['Experience'];
     $Perfered_Time=$_POST['Perfered_Time'];
     $Specilist=$_POST['Specilist'];
     $image= $_FILES['image']['name'];
     $tmp_name= $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name,"Picture/$image");
    $query=mysqli_query($con,"INSERT INTO doctor(Doctor_ID, Doctor_name, Image, Fee, Experience, Specilist, Perfered_Date) VALUES ('$Doctor_Id','$doctor_name','$image','$fee','$Experience','$Specilist','$Perfered_Time')");
    if(mysqli_affected_rows($con)>0){
       header("Location:viewdoctor.php");
     // echo 'Data inserted Successfully';
      }
       else{
            echo 'error'.mysqli_error($con);
        }
    }
  }

//   ------------------------------Doctor Update Query----------------------------------

if(isset($_POST['btndoctorEdit'])){
  
  if(isset($_FILES['image'])){
    $Doctor_Id=$_POST['Doctor_Id'];
 
   $doctor_name= $_POST['doctor_name'];
   $fee= $_POST['fee'];
     $Experience= $_POST['Experience'];
     $Perfered_Time= $_POST['Perfered_Time'];
     $Specilist= $_POST['Specilist'];
      $filename=$_FILES['image']['name'];
      $filename='Picture/'.$filename;
      $tmpname=$_FILES['image']['tmp_name'];
    if(move_uploaded_file($tmpname,$filename)){
      
        $query=mysqli_query($con,"UPDATE doctor SET Doctor_name='$doctor_name',Image='$filename',Fee='$fee',Experience='$Experience',Specilist='$Specilist',Perfered_Date='$Perfered_Time' WHERE Doctor_ID='$Doctor_Id'");
       
        if(mysqli_affected_rows($con)>0){
        
          header("location:viewdoctor.php");
       //  echo 'Data Updated successfully';
      }
      else{
          echo 'failed'.mysqli_error($con);
      }
   }
   else{
       echo "Can't move file to floder";
   }

  }
}

// Deleted Query
//echo 'Delete';
if(isset($_GET['doctorid'])){
  //  echo 'hii';
    $Product_id=$_GET['doctorid'];
     $query=mysqli_query($con,"delete from doctor where doctor_ID='$Product_id'");
     if(mysqli_affected_rows($con)>0){
       header("location:viewdoctor.php");
     }
     else{
         echo 'Fail to delete'.mysqli_error($con);
     }
 } 

?>