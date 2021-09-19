<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>edit game_info row</title>
  </head>
  <body>
    <form action="#" method="get">
      game_id : <input type="text" name="game_id" value="">
      total_downloads : <input type="text" name="total_downloads" value="">
      total_reviews : <input type="text" name="total_reviews" value="">
      imdb_rating : <input type="text" name="imdb_rating" value="">
      <input type="submit" name="update" value="update">
    </form>
    <?php
    include("connection.php");
    if(isset($_GET['update'])){
    $game_id=$_GET['game_id'];
    $total_downloads=$_GET['total_downloads'];
    $total_reviews=$_GET['total_reviews'];
    $imdb_rating=$_GET['imdb_rating'];
    $query="update game_info set total_downloads='$total_downloads',total_reviews='$total_reviews',imdb_rating='$imdb_rating' where game_id='$game_id'";

    $result=mysqli_query($conn,$query);
    $q="select * from game_info";
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
