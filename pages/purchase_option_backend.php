<?php
include("connection.php");
if(isset($_POST['purchase_option'])){
  $id =$_POST['id'];
  $license_type =$_POST['license_type'];
  $version =$_POST['version'];
  $duration =$_POST['duration'];


  $query="insert into purchase_option values('$id','$license_type','$version','$duration')";
  mysqli_query($conn,$query);
  $url="https://localhost/project/pages/purchase_option.php";
  header("Refresh: 2; URL= $url");
}
 ?>
