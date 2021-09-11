<?php
include("connection.php");
if(isset($_POST['game_info'])){
  $game_id=$_POST['game_id'];
  $total_downloads=$_POST['total_downloads'];
  $total_reviews=$_POST['total_reviews'];
  $imdb_rating=$_POST['imdb_rating'];

  $query="insert into game_info values('$game_id','$total_downloads','$total_reviews','$imdb_rating')";
  mysqli_query($conn,$query);
  $url="https://localhost/project/pages/game_info.php";
  header("Refresh: 2; URL= $url");
}
 ?>
