<?php
include 'include/sidebar.php';
include 'include/Header.php';
include 'Connection.php';
?>
  
  <div class="container">
    <br><br><br>
      <div class="row">
      <br> <br>
         <h2 style="text-align:center";>Edit Product</h2>
         <br>
         
      <div class="col-sm-2"></div>
       <div class="col-sm-10">
           <form class="user" method="post" action="CRUD_Product.php" enctype="multipart/form-data">
           <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select name="courseid" id="" select="courseid" class="form-control">
                                        <?php 
                                        $query1=mysqli_query($con,"select * from category");
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
                                    </div>
                                    <div class="col-sm-6">
                              <?php
                                $proid="";
                                 $proid=$_GET['catid'];
                                 $query=mysqli_query($con,"select * from product where Product_ID='$proid'");
                                 if(mysqli_affected_rows($con)>0){
                                   $row=mysqli_fetch_array($query);
                                   
                                  }
                                ?>
                                        <input type="text" class="form-control " name="Product_id" value="<?php echo $proid; ?>" readonly>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="product_name" class="form-control" value="<?php echo $row[1]; ?>"    autocomplete="off" required>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <input type="file" class="form-control "
                                        value="<?php echo $row[5]; ?>" name="proimage" autocomplete="off" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" name="MRP" class="form-control" value="<?php echo $row[3]; ?>" autocomplete="off" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control "
                                           name="Manufactured_date" value="<?php echo $row[6]; ?>"  autocomplete="off" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control "
                                           name="Validity" value="<?php echo $row[4]; ?>"  autocomplete="off" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <textarea type="email" class="form-control " id="description" name="product_description"
                                    value="<?php echo $row[3]; ?>" required></textarea>
                                        <script>
                                        CKEDITOR.replace("description");
                                        </script>
                                </div>
                  
                    
                                <button type="submit" class="btn btn-success btn-user btn-block" name="EditProduct">
                                  Edit Product
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
