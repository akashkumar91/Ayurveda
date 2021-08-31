<?php
include 'include/sidebar.php';
include 'include/Header.php';
include 'Connection.php';
?>
 <div class="container">
    <br><br><br>
      <div class="row">
      <br> <br>
         <h2 style="text-align:center";>Doctor</h2>
         <br>
         
      <div class="col-sm-2"></div>
       <div class="col-sm-10">
           <form class="user" method="post" action="CRUD_APPOINTMENT.php" enctype="multipart/form-data">
           <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <select name="doctor_ID" id="" select="doctor_ID" class="form-control">
                                        <?php 
                                        $query1=mysqli_query($con,"select * from doctor");
                                        if(mysqli_affected_rows($con)>0){
                                          while($row=mysqli_fetch_array($query1)){
                                          echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                                          }
                                        }
                                        else{
                                           echo '<option>No Data found</option>';
                                        }

                                        ?>
                                        </select>
                                        <br>
                                    </div>
                                     <br>
                                    <div class="col-sm-12">
                              <?php
                             // echo ' jhghjgkjhkhk';
                                $APOID="";
                                $query=mysqli_query($con,"select * from APPOINTMENT_table order by APPOINTMENT_ID desc limit 1 ");
                                if(mysqli_affected_rows($con)>0){
                                  $row=mysqli_fetch_array($query);
                                $cid=$row[0];
                                  $part1=substr($cid,0,6);
                                  $part2=substr($cid,6);
                                  if($part2<9){
                                     $part2++;
                                     $APOID=$part1.'000'.$part2;
                                  }
                                  else if($part2<99){
                                    $part2++;
                                    $APOID=$part1.'00'.$part2;
                                 }
                                else if($part2<999){
                                    $part2++;
                                    $APOID=$part1.'0'.$part2;
                                  }
                                 }
                                 else{
                                   $APOID="APPOIN0001";
                                 }
                                ?>
                                        <input type="text" class="form-control " name="Appointment_Id" value="<?php echo $APOID; ?>" readonly>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Patient_name" class="form-control" placeholder="Patient Name"    autocomplete="off" required>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control "
                                             placeholder=" Appiontment_Time" name="Appointment_Time" autocomplete="off" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="fee" class="form-control" placeholder="Fee." autocomplete="off" required>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control "
                                           name="Doctor_name" placeholder="Doctor_Name"  autocomplete="off" required>
                                    </div>
                                    
                                </div>
                                <br>
                                <div class="form-group">
                                    <textarea type="text" class="form-control "  name="Disease"
                                        placeholder="Write about your Disease" required></textarea>
                                        
                                </div>
                                <br>
                    
                  
                    
                                <button type="submit" class="btn btn-success btn-user btn-block" name="btnappointment">
                                 Appointment Details
                                </button>
                                <hr>
            <form>
        </div>
      <br>
      
    </div>
  </div> 