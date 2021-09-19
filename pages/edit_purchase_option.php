<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>edit purchase_option row</title>
  </head>
  <body>
    <form action="#" method="get">
      id : <input type="text" name="id" value="">
      license_type : <input type="text" name="license_type" value="">
      version  : <input type="text" name="version" value="">
      duration : <input type="text" name="duration" value="">
      <input type="submit" name="update" value="update">
    </form>
    <?php
    include("connection.php");
    if(isset($_GET['update'])){
    $id=$_GET['id'];
    $license_type=$_GET['license_type'];
    $version=$_GET['version'];
    $duration=$_GET['duration'];

    $query="update purchase_option set license_type='$license_type',version='$version',duration='$duration' where id='$id'";
    $result=mysqli_query($conn,$query);
    $q="select * from purchase_option";
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
