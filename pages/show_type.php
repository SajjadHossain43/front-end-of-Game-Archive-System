<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Showing type table </title>
  </head>
  <body>
    <table>
      <?php
      include("connection.php");
      $query="select * from type";
      $result=mysqli_query($conn,$query);
      while($row=mysqli_fetch_row($result)){ ?>
        <tr>
          <td><a href="./edit_type.php?game_id=<?php echo $row[0];?>">edit</a> </td>
          <td><?php echo $row[0]; ?></td>
          <td><?php echo $row[1]; ?></td>
          <td><?php echo $row[2]; ?></td>
          <td><?php echo $row[3]; ?></td>
        </tr>
      <?php } ?>

    </table>
  </body>
</html>
