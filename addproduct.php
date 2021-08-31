<?php
include 'include/sidebar.php';
include 'include/Header.php';
include 'Connection.php';
?>
  
  <div class="container">
    <br><br><br>
      <div class="row">
      <br> <br>
         <h2 style="text-align:center";>Add Product</h2>
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
                                $query=mysqli_query($con,"select * from product order by Product_ID desc limit 1 ");
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
                                   $proid="UTWPRO0001";
                                 }
                                ?>
                                        <input type="text" class="form-control " name="Product_id" value="<?php echo $proid; ?>" readonly>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="product_name" class="form-control" placeholder="Product Name"    autocomplete="off" required>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <input type="file" class="form-control "
                                             placeholder="select Image" name="proimage" autocomplete="off" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" name="MRP" class="form-control" placeholder="MRP." autocomplete="off" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control "
                                           name="Manufactured_date" placeholder="Manufactured Date"  autocomplete="off" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control "
                                           name="Validity" placeholder="Validity"  autocomplete="off" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <textarea type="email" class="form-control " id="description" name="product_description"
                                        placeholder="Write about your course" required></textarea>
                                        <script>
                                        CKEDITOR.replace("description");
                                        </script>
                                </div>
                  
                    
                                <button type="submit" class="btn btn-success btn-user btn-block" name="btnProduct">
                                  Add Product
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