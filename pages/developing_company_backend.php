<?php
include("connection.php");
if(isset($_POST['developing_company'])){
  $id=$_POST['id'];
  $name=$_POST['name'];
  $country=$_POST['country'];
  $address=$_POST['address'];

  $query="insert into developing_company values('$id','$name','$country','$address')";
  mysqli_query($conn,$query);
  $url="https://localhost/project/pages/developing_company.php";
  header("Refresh: 2; URL= $url");
}
 ?>
