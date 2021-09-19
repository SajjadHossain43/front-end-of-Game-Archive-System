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
      <input type="submit" name="update" value="update">
    </form>
    <?php
    include("connection.php");
    if(isset($_GET['update'])){
    $id=$_GET['id'];
    $name=$_GET['name'];
    $query="update genre set name='$name' where id='$id'";
    $result=mysqli_query($conn,$query);
    $q="select * from genre";
    $r=mysqli_query($conn,$q);
    while($row=mysqli_fetch_row($r)){
      echo $row[0]." ";
      echo $row[1];
      echo "<br>";
    }
  }
     ?>
  </body>
</html>
