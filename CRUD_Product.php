<?php
 include 'Connection.php';
  if(isset($_POST['btnProduct'])){
  
    if(isset($_FILES['proimage'])){
      $categoryid=$_POST['courseid'];
      $Product_id= $_POST['Product_id'];
      $product_name=$_POST['product_name'];
      $MRP= $_POST['MRP'];
      $Validity= $_POST['Validity'];
      $Manufactured_date= $_POST['Manufactured_date'];
      $product_description= $_POST['product_description'];
      $proimage= $_FILES['proimage']['name'];
      $tmp_name= $_FILES['proimage']['tmp_name'];
    move_uploaded_file($tmp_name,"Picture/$proimage");
   
    $query=mysqli_query($con,"INSERT INTO product(Product_ID, Product_name, Product_Description, Cost, Validity, Product_Image, Manufactured_Date, Category_ID) VALUES ('$Product_id','$product_name','$product_description','$MRP','$Validity','$proimage','$Manufactured_date','$categoryid')");
      if(mysqli_affected_rows($con)>0){
        header("Location:viewproduct.php");
      }
       else{
            echo 'error'.mysqli_error($con);
        }
  }
  
} 

//Updated Part
if(isset($_POST['EditProduct'])){
  
  if(isset($_FILES['proimage'])){
    $categoryid=$_POST['courseid'];
    $Product_id= $_POST['Product_id'];
    $product_name=$_POST['product_name'];
    $MRP= $_POST['MRP'];
    $Validity= $_POST['Validity'];
    $Manufactured_date= $_POST['Manufactured_date'];
    $product_description= $_POST['product_description'];
    // $proimage= $_FILES['proimage']['name'];
    // $tmp_name= $_FILES['proimage']['tmp_name'];
    // move_uploaded_file($tmp_name,"Picture/$proimage");
    $filename=$_FILES['proimage']['name'];
    $filename='Picture/'.$filename;
    $tmpname=$_FILES['proimage']['tmp_name'];
    if(move_uploaded_file($tmpname,$filename)){
 
        $query=mysqli_query($con,"UPDATE product SET Product_name='$product_name',Product_Description='$product_description',Cost='$MRP',Validity='$Validity',Product_Image='$filename',Manufactured_Date='$Manufactured_date',Category_ID='$categoryid' WHERE Product_ID='$Product_id'");
        if(mysqli_affected_rows($con)>0){
          header("location:viewproduct.php");
      }
      else{
          echo 'failed'.mysqli_error($con);
      }
   }
   else{
       echo "Can't move file to floder";
   }

  }
}

// Deleted Query
//echo 'Delete';
if(isset($_GET['proid'])){
 //  echo 'hii';
   $Product_id=$_GET['proid'];
    $query=mysqli_query($con,"delete from product where Product_ID='$Product_id'");
    if(mysqli_affected_rows($con)>0){
      header("location:viewproduct.php");
    }
    else{
        echo 'Fail to delete'.mysqli_error($con);
    }
} 
    
?>