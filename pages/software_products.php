<?php
/*if()
{
  //echo "string";
  $v = $_SESSION['user'];
  echo $v;
  echo "You are not permitted to make a purchase without logging in2!!";
  $url="https://localhost/project/index.php";
  header("Refresh: 2; URL= $url");
}*/
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Games</title>
    <link rel="stylesheet" href="../assets/style.css">
    <a href="../index.php">HOME</a><br>
    <a href="about.php" target="_blank">about</a><br>
    <a href="contact.php" target="_blank">contact</a><br>
    <a href="./show_games.php">show all available games</a>
    <script>
      src="../assets/function.js"
    </script>
  </head>
  <body>
    <h1 class="center-al"><i>Our Products</i></h1>
<script>
function al() {
alert("Are you sure you want to buy this game?");
return true;
}
</script>
<button type="button" onclick="return al()"><a href="payment.html"><img class="img-link" src="https://upload.wikimedia.org/wikipedia/en/2/2c/Resident_Evil_Village.png" alt="Resident_Evil_Village" style="width:150px height:150px"></a></button>
<button type="button" onclick="return al()"><a href="payment.html"><img class="img-link" src="https://upload.wikimedia.org/wikipedia/en/4/4b/Hitman_3_Packart.jpg" alt="Hitman_3_Packart" style="width:150px height:150px"></a></button>
<button type="button" onclick="return al()"><a href="payment.html"><img class="img-link" src="https://upload.wikimedia.org/wikipedia/en/1/14/Halo_Infinite.png" alt="Halo_Infinite" style="width:150px height:150px"></a></button>
<div class="image">
  <a href="payment.html"><img class="img-link" src="https://upload.wikimedia.org/wikipedia/en/2/2c/Resident_Evil_Village.png" alt="Resident_Evil_Village" style="width:150px height:150px"></a>
    <img class="image__img" src="" alt="Resident_Evil_Village">
    <div class="image__overlay">
        <div class="image__title">Resident_Evil_Village</div>
        <p class="image__description">
            File size : 68 gb <br>
            platform : windows
            Required RAM : 8gb
            Required GPU : nvidia geforece 2202
        </p>
    </div>
</div>
<div class="image">
    <img class="image__img" src="" alt="Hitman_3_Packart">
    <button type="button" onclick="return al()"><img class="img-link" img class="image__img" src="https://upload.wikimedia.org/wikipedia/en/4/4b/Hitman_3_Packart.jpg" alt="Resident_Evil_Village" style="width:150px height:150px"></button>
    <div class="image__overlay">
        <div class="image__title">Hitman_3_Packart</div>
        <p class="image__description">
            File size : 68 gb <br>
            platform : windows
            Required RAM : 12gb
            Required GPU : nvidia geforece 6300
        </p>
    </div>
</div>
<div class="image">
    <img class="image__img" src="" alt="Halo_Infinite">
    <button type="button" onclick="return al()"><img class="img-link" img class="image__img" src="https://upload.wikimedia.org/wikipedia/en/1/14/Halo_Infinite.png" alt="Resident_Evil_Village" style="width:150px height:150px"></button>
    <div class="image__overlay">
        <div class="image__title">Halo_Infinite</div>
        <p class="image__description">
            File size : 78 gb <br>
            platform : windows
            Required RAM : 12gb
            Required GPU : nvidia geforece 6300
        </p>
    </div>
</div>
  </body>
</html>
