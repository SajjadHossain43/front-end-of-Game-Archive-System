<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Showing game table </title>
  </head>
  <body>
    <table>
      <?php
      include("connection.php");
      $query="select * from game";
      $result=mysqli_query($conn,$query);
      while($row=mysqli_fetch_row($result)){ ?>
        <tr>
          <td><a href="./edit_game_row.php?id=<?php echo $row[0];?>">edit</a> </td>
          <td><?php echo $row[0]; ?></td>
          <td><?php echo $row[1]; ?></td>
          <td><?php echo $row[2]; ?></td>
          <td><?php echo $row[3]; ?></td>
        </tr>
      <?php } ?>

    </table>
  </body>
</html>
