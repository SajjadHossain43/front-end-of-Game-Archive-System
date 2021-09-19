<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>edit genre row</title>
  </head>
  <body>
    <form action="#" method="get">
      game_id  : <input type="text" name="game_id" value="">
      internet_connection_requirement  : <input type="text" name="internet_connection_requirement" value="">
      platform  : <input type="text" name="platform" value="">
      age_limit  : <input type="text" name="age_limit" value="">
      <input type="submit" name="update" value="update">
    </form>
    <?php
    include("connection.php");
    if(isset($_GET['update'])){
    $game_id=$_GET['game_id'];
    $internet_connection_requirement=$_GET['internet_connection_requirement'];
    $platform=$_GET['platform'];
    $age_limit=$_GET['age_limit'];
    $query="update type set internet_connection_requirement='$internet_connection_requirement',platform='$platform',age_limit='$age_limit' where game_id='$game_id'";
    $result=mysqli_query($conn,$query);
    $q="select * from type";
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
