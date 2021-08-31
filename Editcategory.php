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
                <h1 style="text-align:center";>Edit Category</h1>
                <form class="user" method="post" action="CRUD_Caregory.php">
                                
                            
                <div class="form-group">
                                <?php
                                $catid=$_GET['catid'];
                                $query=mysqli_query($con,"select * from category where category_id='$catid' ");
                                if(mysqli_affected_rows($con)>0){
                                  $row=mysqli_fetch_array($query);
                                }
                                ?>
                                    <input type="text" name="catid" class="form-control form-control-user" value="<?php
                                    echo $catid;?>"readonly >
                                </div>
                                <br>
                              
                                <div class="form-group">
                                    <input type="text" name="categoryname" class="form-control form-control-user" value="<?php echo $row['1'];?>" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="text" name="categorycode" class="form-control form-control-user"  value="<?php echo $row['2'];?>"required>
                                </div>
                                <br>
                                <button type="submit" name = "Editcategory" class=" btn btn-success btn-mb btn-block">
                                 Edit Category
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