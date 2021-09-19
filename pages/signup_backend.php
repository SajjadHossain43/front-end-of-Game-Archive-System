<?php
include("connection.php");
if (isset($_POST['register'])) {

  $user_name  =  $_POST['user'];
  $password=$_POST['password'];
  $email =  $_POST['email'];
  $gender  = $_POST['gender'];
  $country=$_POST['country'];

  if ($user_name == '') {
    echo "<script>alert('Please enter the name')</script>";
    $url="https://localhost/project/index.php";
    header("Refresh: 2; URL= $url");
    exit();
  }
  if ($email == '') {
    echo "<script>alert('Please enter the email')</script>";
    $url="https://localhost/project/index.php";
    header("Refresh: 2; URL= $url");
    exit();
  }
  if ($password == '') {
    echo "<script>alert('Please enter the password')</script>";
    $url="https://localhost/project/index.php";
    header("Refresh: 2; URL= $url");
    exit();
  }

  $check_email_query = "select * from login where Email='$email' and Password=$password";
  $run_query =  mysqli_query($conn, $check_email_query);
  if (mysqli_num_rows($run_query) == 1) {
    echo "Welcome ".$user_name;
    $url="https://localhost/project/pages/login_backend.php";
    header("Refresh: 2; URL= $url");
    return 0;
    exit();
  }

  $insert_user = "insert into login
  value ('$user_name', '$password', '$email','$gender','$country')";

   if(mysqli_query($conn, $insert_user)){
     echo "Successfully signed up and logged in!";
     $url="https://localhost/project/pages/login_backend.php";
     header("Refresh: 2; URL= $url");
   }

}else {
  echo "<script>window.open('../index.php','_self')</script>";
}
