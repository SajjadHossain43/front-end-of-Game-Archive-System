<?php
session_start();
if(!isset($_SESSION["user"]))
{
  echo "You are not permitted to make a purchase without logging in!!";
  $url="https://localhost/project/index.php";
  header("Refresh: 2; URL= $url");
  exit();
}
else
{
  echo "Welcome " .$_SESSION["user"];
  $url="https://localhost/project/pages/software_products.php";
  header("Refresh: 2; URL= $url");
  exit();
}

 ?>
