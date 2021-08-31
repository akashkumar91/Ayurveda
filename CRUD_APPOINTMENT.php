<?php
include 'Connection.php';
if(isset($_POST['btnappointment'])){
     $doctor_ID=$_POST['doctor_ID'];
     $Appointment_Id=$_POST['Appointment_Id'];
     $Patient_name=$_POST['Patient_name'];
     $Appointment_Time=$_POST['Appointment_Time'];
     $fee=$_POST['fee'];
     $Doctor_name=$_POST['Doctor_name'];
     $Disease=$_POST['Disease'];
      $query=mysqli_query($con,"INSERT INTO appointment_table(Appointment_ID, Patient_name, Disease, Appointment_Time, fee, Doctor_Search) VALUES ('$Appointment_Id','$Patient_name','$Disease','$Appointment_Time','$fee','$doctor_ID')");
      if(mysqli_affected_rows($con)>0){
    //      echo "Data inserted Successfully";
            header("Location:viewappointment.php");
     }
     else{
         echo mysqli_error($con);
     }
}
?>