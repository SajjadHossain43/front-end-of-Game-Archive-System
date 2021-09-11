<?php
include("connection.php");
if(isset($_POST['game'])){
  $id=$_POST['id'];
  $name=$_POST['name'];
  $genre_id=$_POST['genre_id'];
  $series=$_POST['series'];

  $query="insert into game values('$id','$name','$genre_id','$series')";

  mysqli_query($conn,$query);
  $url="https://localhost/project/pages/add_game.php";
  header("Refresh: 2; URL= $url");
}
?>
