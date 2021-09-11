<?php
include("connection.php");
if(isset($_POST['player'])){
  $id =$_POST['id'];
  $full_name=$_POST['full_name'];
  $email=$_POST['email'];
  $country=$_POST['country'];
  $state=$_POST['state'];
  $payment_currency=$_POST['payment_currency'];
  $mobile_number=$_POST['mobile_number'];
  $purchase_option_id =$_POST['purchase_option_id'];
  $joined_at =$_POST['joined_at'];

  $query="insert into player values('$id','$full_name','$email','$country','$state','$payment_currency','$mobile_number','$purchase_option_id','$joined_at')";

  mysqli_query($conn,$query);
  $url="https://localhost/project/pages/player.php";
  header("Refresh: 2; URL= $url");
}
 ?>
