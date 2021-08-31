<?php
include 'include/sidebar.php';
include 'include/Header.php';
include 'Connection.php';
?>  
    <div class="container">
      <div class="row">
      <br><br></br><br></br>
           <div class="col-sm-4"></div>
           <div class="col-sm-6"><br><br><br>
                <h1 style="text-align:center";>Add Category</h1>
                <form class="user" method="post" action="CRUD_Caregory.php">
                                
                            
                                <div class="form-group">
                                <?php
                                $catid="";
                                $query=mysqli_query($con,"select * from category order by category_id desc limit 1 ");
                                if(mysqli_affected_rows($con)>0){
                                  $row=mysqli_fetch_array($query);
                                  $cid=$row[0];
                                  $part1=substr($cid,0,6);
                                  $part2=substr($cid,6);
                                  if($part2<9){
                                     $part2++;
                                     $catid=$part1.'000'.$part2;
                                  }
                                  else if($part2<99){
                                    $part2++;
                                    $catid=$part1.'00'.$part2;
                                 }
                                else if($part2<999){
                                    $part2++;
                                    $catid=$part1.'0'.$part2;
                                 }
                                }
                                else{
                                   $catid="UTWCAT0001";
                                }
                                ?>
                                    <input type="text" name="catid" class="form-control form-control-user"  value="<?php
                                    echo $catid;?>" readonly>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="text" name="categoryname" class="form-control form-control-user" placeholder="Category Name" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="text" name="categorycode" class="form-control form-control-user"  placeholder="Category Code" required>
                                </div>
                                <br>
                                <button type="submit" name = "addcategory" class=" btn btn-success btn-mb btn-block">
                                   Add Course
                                </button>
                                </div>
                               
                                <hr>
                                
                            </form>
                     </div>
           <div class="col-sm-2"></div>
      </div>
    </div>  

 <br>
   
<?php
include 'include/Footer1.php';
?>