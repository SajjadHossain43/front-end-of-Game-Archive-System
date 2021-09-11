<?php
include("connection.php");
if(isset($_POST['developers'])){
  $id=$_POST['id'];
  $game_id=$_POST['game_id'];
  $developing_company_id=$_POST['developing_company_id'];
  $full_name=$_POST['full_name'];

  $query="insert into developers values('$id','$game_id','$developing_company_id','$full_name')";
  mysqli_query($conn,$query);
  $url="https://localhost/project/pages/developers.php";
  header("Refresh: 2; URL= $url");
}
 ?>
