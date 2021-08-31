<?php
include 'include/sidebar.php';
include 'include/Header.php';
include 'Connection.php';
?> 
<div class="container">
  <br>
  <br><br><br>
  <div class="row">
    <br>
  
    <div class="col-sm-2"></div>
   <br>
                   <div class="col-sm-10">
                   <h1 style="text-align:center";>View Contact Message</h1>
                   <br>
                  <div class="table table-responsive">
                    <table class="table table-striped ">
                      <thead class="thead-dark">
                        <tr> 
                          <th>S.No</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Phone Number</th>
                          <th>Email</th>
                          <th>Message</th>
                          <th>Date</th>
                        </tr>
                       </thead>
      
                        <tbody>
                                       <?php
                                       $query=mysqli_query($con,"select * from customer_query");
                                       if(mysqli_affected_rows($con)>0){
                                          $i=1;
                                          while($row=mysqli_fetch_array($query)){

                                      
                                       ?>
                                        <tr> 
                                           <td><?php echo $i; ?></td>
                                           <td><?php echo $row[1]; ?></td>
                                           <td><?php echo $row[2]; ?></td>
                                           <td><?php echo $row[3]; ?></td>
                                           <td><?php echo $row[4];?></td>
                                           <td><?php echo $row[5]; ?></td>
                                           <td><?php echo $row[6]; ?></td>
                                        </tr>
                                        <?php
                                        $i++;
                                          }
                                        }
                                        else {
                                        echo "Data Not Found";
                                        }
                                        ?>
                                    </tbody>
    </table>
   </div>
 
    </div>
    <!-- <div class="col-3"></div> -->
  </div>

</div>  
<?php
include 'include/Footer1.php';
?>