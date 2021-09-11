<?php session_start();
session_unset();
session_destroy();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./assets/style.css">
    <script src="./assets/function.js"></script>
    <title>Game Archive System</title>
    <h1 class="center-al">The New Era Of Simplicity</h1>
    <a href="#">HOME</a><br>
    <a href="./pages/about.php" target="_blank">about</a><br>
    <a href="./pages/contact.php" target="_blank">contact</a><br>
    <a href="./pages/admin.php" target="_blank">admin</a>
  </head>
  <body>
<h3><b>Products we cover</b></h3>
<ul>
  <li><a href="./pages/software_products.php">Gaming Softwares and Games</a></li>
  <li><a href="./pages/gadgets.php">Gaming Gadgets</a></li>
</ul>

<div class="div_sign">
  <button id="myBtn">Sign up!/Log in!</button>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <form name="sign" class="" action="./pages/signup_backend.php" method="post" onsubmit="return validate()">
      Username : <input type="text" name="user" value="" required><br>
      Password : <input type="password" name="password" value="" required><br>
      Email : <input type="text" name="email" value="" required><br>
      Gender : female <input type="radio" name="gender" value="">male <input type="radio" name="gender" value="">
      other <input type="radio" name="gender" value=""><br>
      Country :
      <select class="" name="country" required>
        <option value="">none</option>
        <option value="bd">Bangladesh</option>
        <option value="in">India</option>
        <option value="pk">Pakistan</option>
        <option value="Ag">Argentina</option>
        <option value="us">America</option>
        <option value="uk">England</option>
        <option value="cn">Canada</option>
      </select>
      <input type="submit" name="register" value="register">
    </form>
  </div>

</div>
</div>
<script>
// Get the moda
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<img src="https://gameranx.com/wp-content/uploads/2020/03/Valorant-1024x582.jpg" alt="content">
</body>
</html>
