<?php
include 'Connection.php';
if(isset($_POST['addcategory'])){
     $catid=$_POST['catid'];
     $categoryname=strtoupper( $_POST['categoryname']);
     $categorycode =$_POST['categorycode'];
     $query = mysqli_query($con,"insert into category(Category_ID,Category_Name, Category_Code) VALUES ('$catid','$categoryname','$categorycode')");
     if(mysqli_affected_rows($con)>0){
        // echo "Data inserted successfully";
           header ('location:viewcategory.php');
     }
     else{
         echo "Fail to insert".mysqli_error($con);
     }
}
if(isset($_POST['Editcategory'])){
    $catid=$_POST['catid'];
    $categoryname=( $_POST['categoryname']);
    $categorycode =$_POST['categorycode'];
    $query = mysqli_query($con,"update category set Category_Name='$categoryname', Category_Code='$categorycode' where Category_ID='$catid'");
   if(mysqli_affected_rows($con)>0){
       header("Location:viewcategory.php");
   }
   else{
       echo " Fail to update category".mysqli_error($con);
   }
}
if(isset($_GET['catid'])){
    $catid=$_GET['catid'];
    $query=mysqli_query($con,"delete from category where Category_ID='$catid'");
    if(mysqli_affected_rows($con)>0){
        header("Location:viewcategory.php");
    }
    else{
        echo 'Fail to delete'.$mysqli_error($con);
    }
}

?>