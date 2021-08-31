<?php
include 'include/sidebar.php';
include 'include/Header.php';
include 'Connection.php';
?>
<div class="container">
    <br><br><br>
   <div class="row">
        <br> <br>
        
  <h1><a class="btn btn-success"href ="viewblog.php"style="float:right; font-size :18px;">View Blog</a></hh1>
         <h2 style="text-align:center";>BLOG DETAILS</h2>
         
         <br>
         <div class="col-sm-2"></div>
         <div class="col-sm-10">
           <form class="user" method="post" action="CRUD_BLOg.php" enctype="multipart/form-data">
           <div class="form-group row">
                                   
                                <br>


                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="BLOG_Heading" class="form-control" placeholder="BLOG_Heading"    autocomplete="off" required>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="file" class="form-control "
                                             placeholder="Picture" name="Picture" autocomplete="off" required>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-group row">
                                   <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" name="BLOG_title" class="form-control" placeholder="BLOG_Title"    autocomplete="off" required>
                                    </div>

                                </div>
                                <br>
                                <br>
                                <div class="form-group">
                                    <textarea type="text" class="form-control " id="description" name="discription"
                                        placeholder="Write about your course" required></textarea>
                                        <script>
                                        CKEDITOR.replace("description");
                                        </script>
                                </div>
                  
                    
                                <button type="submit" class="btn btn-success btn-user btn-block" name="btnblog">
                                  Add Blog
                                </button>
                                <hr>
            <form>
        </div>
        <div class="col-sm-2"></div>

   </div>

</div>