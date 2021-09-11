<?php
include("connection.php");
if(isset($_POST['genre'])){
  $id=$_POST['id'];
  $name=$_POST['name'];

  $query="insert into genre values('$id','$name')";
  mysqli_query($conn,$query);
  $url="https://localhost/project/pages/genre.php";
  header("Refresh: 2; URL= $url");
}
 ?>
