<?php
 $con=mysqli_connect("localhost","root","","eayurveda");
 if(!$con){
     echo "Fail to Establish Connection".mysqli_error($con);
 }

?>