<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>edit genre row</title>
  </head>
  <body>
    <form action="#" method="get">
      id : <input type="text" name="id" value="">
      name : <input type="text" name="name" value="">
      genre_id : <input type="text" name="genre_id" value="">
      series : <input type="text" name="series" value="">
      <input type="submit" name="update" value="update">
    </form>
    <?php
    include("connection.php");
    if(isset($_GET['update'])){
    $id=$_GET['id'];
    $name=$_GET['name'];
    $genre_id=$_GET['genre_id'];
    $series=$_GET['series'];
    $query="update game set name='$name', genre_id='$genre_id',series='$series' where id='$id'";
    $result=mysqli_query($conn,$query);
    $q="select * from game";
    $r=mysqli_query($conn,$q);
    while($row=mysqli_fetch_row($r)){
      echo $row[0]." ";
      echo $row[1]." ";
      echo $row[2]." ";
      echo $row[3]." ";
      echo "<br>";
    }
  }
     ?>
  </body>
</html>
