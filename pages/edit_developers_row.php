<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>edit developers row</title>
  </head>
  <body>
    <form action="#" method="get">
      id : <input type="text" name="id" value="">
      game_id  : <input type="text" name="game_id" value="">
      developing_company_id : <input type="text" name="developing_company_id" value="">
      full_name: <input type="text" name="full_name" value="">
      <input type="submit" name="update" value="update">
    </form>
    <?php
    include("connection.php");
    if(isset($_GET['update'])){
    $id=$_GET['id'];
    $game_id=$_GET['game_id'];
    $developing_company_id=$_GET['developing_company_id'];
    $full_name=$_GET['full_name'];
    $query="update developers set game_id='$game_id',developing_company_id='$developing_company_id',full_name='$full_name' where id='$id'";
    $result=mysqli_query($conn,$query);
    $q="select * from developers";
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
