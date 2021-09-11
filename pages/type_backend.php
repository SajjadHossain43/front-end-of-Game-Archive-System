<?php
include("connection.php");
if(isset($_POST['type'])){
  $game_id=$_POST['game_id'];
  $internet_connection_requirement=$_POST['internet_connection_requirement'];
  $platform=$_POST['platform'];
  $age_limit=$_POST['age_limit'];


  $query="insert into type values('$game_id','$internet_connection_requirement','$platform','$age_limit')";
  mysqli_query($conn,$query);
  $url="https://localhost/project/pages/type.php";
  header("Refresh: 2; URL= $url");
}
 ?>
