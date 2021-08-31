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
  <h1><a class="btn btn-success"href ="Blog.php"style="float:right; font-size :18px;"> Add Blog</a></h1>
    <div class="col-sm-2"></div>
   <br>
                   <div class="col-sm-10">
                   <h1 style="text-align:center";>View Category</h1>
                   <br>
                  <div class="table table-responsive">
                    <table class="table table-striped ">
                      <thead class="thead-dark">
                        <tr> 
                          <th>Blog ID</th>
                          <th>Blog Heading</th>
                          <th>Blog Title</th>
                          <th>Discription</th>
                          <th>Picture</th>
                          <th>Created Date</th>
                          <th>Action</th>
                        </tr>
                       </thead>
      
                        <tbody>
                                       <?php
                                       $query=mysqli_query($con,"select * from Blog ");
                                       if(mysqli_affected_rows($con)>0){
                                          $i=1;
                                          while($row=mysqli_fetch_array($query)){

                                      
                                       ?>
                                        <tr>
                                           
                                           <td><?php echo $row[0]; ?></td>
                                           <td><?php echo $row[1]; ?></td>
                                           <td><?php echo $row[2]; ?></td>
                                           <td><?php echo $row[3];?></td>
                                           <td><img src="Picture/<?php echo $row[4]; ?>" class="img-thumbnail" width="200px"></td>
                                           <td><?php echo $row[5]; ?></td>
                                           <td> <a href="Editblog.php?catid=<?php echo $row[0];?>"> <i style="color:blue;" class='fas fa-edit'></i></a> |<a href="CRUD_BLOg.php?catid=<?php echo $row[0];?>"> <i style="color:red;" class='fas fa-trash'></i></a></td>
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