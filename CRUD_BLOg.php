<?php
include 'Connection.php';
if(isset($_POST['btnblog'])){
    if(isset($_FILES['Picture'])){
  //echo $Blog_Id=$_POST['Blog_Id'];
   $BLOG_Heading=$_POST['BLOG_Heading'];
   $BLOG_title=$_POST['BLOG_title'];
   $discription=$_POST['discription'];
   $Picture=$_FILES['Picture']['name'];
   $tmp_name=$_FILES['Picture']['tmp_name'];
  move_uploaded_file($tmp_name,"Picture/$Picture");
  $query=mysqli_query($con,"INSERT INTO blog( Blog_Heading, Blog_Title, Discription, Picture, Created_date) VALUES ('$BLOG_Heading','$BLOG_title','$discription','$Picture',now())");
   if(mysqli_affected_rows($con)>0){
     //  echo "Data inserted successfully";
     header("Location:viewblog.php");
   }
   else{
       echo "Error".mysqli_error($con);
   }

   }

}
// --------------------------------------Edit BLOG--------------------------
if(isset($_POST['Editblog'])){
  
    if(isset($_FILES['Picture'])){
   
    $Blog_Id=$_POST['Blog_Id'];
    $BLOG_Heading=$_POST['BLOG_Heading'];
    $BLOG_title=$_POST['BLOG_title'];
    $discription=$_POST['discription'];
    $Picture=$_FILES['Picture']['name'];
    $tmp_name=$_FILES['Picture']['tmp_name'];
  move_uploaded_file($tmp_name,"Picture/$Picture");
  $query=mysqli_query($con,"UPDATE blog SET Blog_Heading='$BLOG_Heading',Blog_Title='$BLOG_title',Discription='$discription',Picture='$Picture',Created_date=now() WHERE Blog_ID='$Blog_Id'");
   if(mysqli_affected_rows($con)>0){
    //  echo "Data updated successfully";
      header("Location:viewblog.php");
   }
   else{
       echo "Error".mysqli_error($con);
   }

 }
}

// ---------------Deleted Query-------------------

if(isset($_GET['catid'])){
  $catid=$_GET['catid'];
  $query=mysqli_query($con,"delete from Blog where Blog_ID='$catid'");
  if(mysqli_affected_rows($con)>0){
      header("Location:viewblog.php");
  }
  else{
      echo 'Fail to delete'.$mysqli_error($con);
  }
}

?>