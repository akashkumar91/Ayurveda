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
           <form class="user" method="post" action="CRUD_Doctor.php" enctype="multipart/form-data">
           <div class="form-group row">
                                    <div class="col-sm-12">
                              <?php
                               
                                $query=mysqli_query($con,"select * from Doctor order by Doctor_ID desc limit 1 ");
                                if(mysqli_affected_rows($con)>0){
                                  $row=mysqli_fetch_array($query);
                                  $cid=$row[0];
                                  $part1=substr($cid,0,6);
                                  $part2=substr($cid,6);
                                  if($part2<9){
                                     $part2++;
                                     $proid=$part1.'000'.$part2;
                                  }
                                  else if($part2<99){
                                    $part2++;
                                    $proid=$part1.'00'.$part2;
                                 }
                                else if($part2<999){
                                    $part2++;
                                    $proid=$part1.'0'.$part2;
                                  }
                                }
                                 else{
                                   $doctorid="DOCTOR0001";
                                 }
                                ?>
                                <?php
                                $doctorid=$_GET['doctorid'];
                                $query=mysqli_query($con,"select * from doctor where doctor_ID='$doctorid'");
                                if(mysqli_affected_rows($con)>0){
                                  $row=mysqli_fetch_array($query);  

                                 }
                                ?>
                                        <input type="text" class="form-control " name="Doctor_Id" value="<?php echo $doctorid; ?>" readonly>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="doctor_name" class="form-control" value="<?php echo $row[1];?>"   autocomplete="off" required>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="file" class="form-control "
                                        value="<?php echo $row[2];?>" name="image" autocomplete="off" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" name="fee" class="form-control" value="<?php echo $row[3];?>"  autocomplete="off" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control "
                                           name="Experience" value="<?php echo $row[4];?>"   autocomplete="off" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control "
                                           name="Perfered_Time"value="<?php echo $row[5];?>" autocomplete="off" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <textarea type="text" class="form-control " id="description" name="Specilist"
                                    value="<?php echo $row[6];?>" required></textarea>
                                        <script>
                                        CKEDITOR.replace("description");
                                        </script>
                                </div>
                  
                    
                                <button type="submit" class="btn btn-success btn-user btn-block" name="btndoctorEdit">
                                  Edit Doctor Details
                                </button>
                                <hr>
            <form>
        </div>
      <br>
      
    </div>
  </div> 
<?php
  include 'include/Footer1.php';
?>