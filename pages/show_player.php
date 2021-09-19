<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Showing player table </title>
  </head>
  <body>
    <table>
      <?php
      include("connection.php");
      $query="select * from player";
      $result=mysqli_query($conn,$query);
      while($row=mysqli_fetch_row($result)){ ?>
        <tr>
          <td><a href="./edit_player.php?id=<?php echo $row[0];?>">edit</a> </td>
          <td><?php echo $row[0]; ?></td>
          <td><?php echo $row[1]; ?></td>
          <td><?php echo $row[2]; ?></td>
          <td><?php echo $row[3]; ?></td>
          <td><?php echo $row[4]; ?></td>
          <td><?php echo $row[5]; ?></td>
          <td><?php echo $row[6]; ?></td>
          <td><?php echo $row[7]; ?></td>
          <td><?php echo $row[8]; ?></td>
        </tr>
      <?php } ?>

    </table>
  </body>
</html>
