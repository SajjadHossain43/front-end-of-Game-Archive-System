<?php
include("connection.php");
if(isset($_POST['internal_release'])){
  $game_id=$_POST['game_id'];
  $name=$_POST['name'];
  $genre_id=$_POST['genre_id'];

  $query="insert into internal_release values('$game_id','$name','$genre_id')";
  mysqli_query($conn,$query);
  $url="https://localhost/project/pages/internal_release.php";
  header("Refresh: 2; URL= $url");
}
 ?>
