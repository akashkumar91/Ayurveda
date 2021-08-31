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
                <h1 style="text-align:center";>Akash</h1>
                <form class="user" method="post" action="CRUD_Aboutus.php" enctype="multipart/form-data">
                                
                            
                                
                             
                                <div class="form-group">
                                    <input type="text" name="About_heading" class="form-control form-control-user" placeholder="About heading" required>
                                </div>
                                <br>
                                <div class="form-group">
                                <textarea rows="4" cols="80" name="About_us_Description1" class="form-control form-control-user"  placeholder="About_us_Description1" required></textarea>
                                </div>
                                <br>
                                <div class="form-group">
                                <textarea rows="4" cols="80" name="About_us_Description2" class="form-control form-control-user"  placeholder="About_us_Description2" required></textarea>
                                </div>
                                <br>
                                <div class="form-group">
                                    
                                    <textarea rows="4" cols="80" name="About_us_Description3" class="form-control form-control-user"  placeholder="About_us_Description3" required></textarea>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="file" name="proimage1" class="form-control" placeholder="Product Name"    autocomplete="off" >
                                    </div>
                                    <div class="col-sm-6 ">
                                        <input type="file" class="form-control "
                                             placeholder="select Image" name="proimage2" autocomplete="off" >
                                    </div>
                                </div>
                                <br>
                                <button type="submit" name = "editabout" class=" btn btn-success btn-mb btn-block">
                                   Update About
                                </button>
                                </div>
                               
                                <hr>
                                

   
                            </form>
    
                            <div class="row">
                              <div class="col-sm-4"></div>
                              <div class="col-sm-4">
                              <?php
                               if(isset($_GET['res'])){
                               $res=$_GET['res'];
                               if($res==1){
                              ?>
                               <div class="alert alert-success alert-dismissible">
                               <button type="button" class="close" data-dismiss="alert">&times; </button>
                               <strong>About us has been updated successfully</strong>
                     
                      
                             </div>
                          <?php
                         }
                         else{
                        ?>
                      <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times; </button>
                           <strong>Fail to update</strong>
                     
                      
                      </div>
                      <div class="col-sm-4"></div>
         <?php
      }
   
   }
      ?>
                              </div>
                            </div>
                     </div>
           <div class="col-sm-2"></div>
      </div>
    </div>  

 <br>
   
<?php
include 'include/Footer1.php';
?>