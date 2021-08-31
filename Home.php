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
                <h1 style="text-align:center";>Home page Settings</h1>
                <form class="user" method="post" action="websitesetting.php">
                <div class="form-group row">
                   <br><br><br>  
                   
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        
                                    <input type="text" class="form-control " name="slogan" placeholder="Slogan">
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        
                                    <input type="text" class="form-control " name="heading" placeholder="Heading">
                                    </div>
                                    <br>
                                    <br><br>
                                    <div class="form-group">
                                    <textarea type="text" class="form-control " id="description" name="page_desc"
                                     required></textarea>
                                        <script>
                                        CKEDITOR.replace("description");
                                        </script>
                                        <br>
                                </div>
                                
                
                                <button type="submit" class="btn btn-success btn-user btn-block" name="btnhome">
                                  Home Page Setting
                                </button>
                                <hr>
                        
                          
                            </form>
                           
                           
                            <?php
   if(isset($_GET['res'])){
      $res=$_GET['res'];
      if($res==1){
       ?>
         <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times; </button>
                           <strong>Data has been updated successfully</strong>
                     
                      
                      </div>
       <?php
      }
      else{
         ?>
            <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times; </button>
                           <strong>Fail to update</strong>
                     
                      
                      </div>
         <?php
      }
   
   }
      ?>

                     </div>
           <div class="col-sm-2"></div>
      </div>
    </div>  

