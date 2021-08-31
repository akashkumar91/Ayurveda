<?php
include 'include/sidebar.php';
include 'include/Header.php';
include 'Connection.php';
?>  
    <div class="container">
      <div class="row">
      <br><br></br><br></br>
           <div class="col-sm-2"></div>
           <div class="col-sm-10"><br><br><br>
                <h1 style="text-align:center";>Edit Blog</h1>
                <form class="user" method="post" action="CRUD_BLOg.php" enctype="multipart/form-data">
                                
                            
                <div class="form-group">
                                <?php
                                $blogid=$_GET['catid'];
                                $query=mysqli_query($con,"select * from Blog where Blog_ID='$blogid' ");
                                if(mysqli_affected_rows($con)>0){
                                  $row=mysqli_fetch_array($query);
                                }
                                ?>
                                    <input type="text" name="Blog_Id" class="form-control form-control-user" value="<?php
                                    echo $blogid;?>"readonly >
                                </div>
                                <br>
                              
                                <div class="form-group">
                                    <input type="text" name="BLOG_Heading" class="form-control form-control-user" value="<?php echo $row['1'];?>" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="text" name="BLOG_title" class="form-control form-control-user"  value="<?php echo $row['2'];?>"required>
                                </div>

                                <br>
                                <div class="form-group">
                                     <textarea type="text" class="form-control "  id="description" name="discription"
                                     value="<?php echo $row['3']; ?>" required></textarea>
                                        <script>
                                        CKEDITOR.replace("description");
                                        </script>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="file" name="Picture" class="form-control form-control-user"  value="<?php echo $row['4'];?>"required>
                                </div>
                                <br>
                                
                                <button type="submit" name = "Editblog" class=" btn btn-success btn-mb btn-block">
                                 Edit Blog
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