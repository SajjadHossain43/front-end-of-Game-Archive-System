<?php
include("connection.php");
if(isset($_POST['admin'])){
  $uname=$_POST['name'];
  $upassword=$_POST['password'];

  $query="select * from admin where admin.name='$uname' and admin.password='$upassword';";
  $res=mysqli_query($conn,$query);
  $row=mysqli_num_rows($res);
  if($row==1){
  session_start();
  $_SESSION["admin"]=$uname;
}
else{
  echo "Wrong Credentials";
  $url="https://localhost/project/index.php";
  header("Refresh: 2; URL= $url");
}
}
else{
  echo "Sorry your request can not be executed!";
  $url="https://localhost/project/index.php";
  header("Refresh: 2; URL= $url");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PORTAL</title>
    <center><h1>Admin Portal</h1></center>
  </head>
  <body>
    <a href="./genre.php">add genre</a><br>
    <a href="./add_game.php">add game</a><br>
    <a href="./internal_release.php">add internal release</a><br>
    <a href="./developing_company.php">add developing company</a><br>
    <a href="./developers.php">add developers</a><br>
    <a href="./game_info.php">add game info</a><br>
    <a href="./type.php">add type</a><br>
    <a href="./purchase_option.php">add purchase option</a><br>
    <a href="./player.php">add player</a><br>
    <a href="./coupon_generator.php">add coupon generator</a><br>
    <a href="./discount.php">add discount</a><br>
    <a href="./purchase_info.php">add purchase info</a><br>
    <a href="./license.php">add license</a><br>
    <a href="./payment.php">add payment</a><br>
  </body>
</html>
