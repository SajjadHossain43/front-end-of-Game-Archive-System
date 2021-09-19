<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>edit player row</title>
  </head>
  <body>
    <form action="#" method="get">
      id : <input type="text" name="id" value="">
      full_name  : <input type="text" name="full_name" value="">
      email  : <input type="text" name="email" value="">
      country  : <input type="text" name="country" value="">
      state  : <input type="text" name="state" value="">
      payment_currency  : <input type="text" name="payment_currency" value="">
      mobile_number  : <input type="text" name="mobile_number" value="">
      purchase_option_id  : <input type="text" name="purchase_option_id" value="">
      joined_at  : <input type="text" name="joined_at" value="">
      <input type="submit" name="update" value="update">
    </form>
    <?php
    include("connection.php");
    if(isset($_GET['update'])){
    $id=$_GET['id'];
    $full_name=$_GET['full_name'];
    $email=$_GET['email'];
    $country=$_GET['country'];
    $state=$_GET['state'];
    $payment_currency=$_GET['payment_currency'];
    $mobile_number=$_GET['mobile_number'];
    $purchase_option_id=$_GET['purchase_option_id'];
    $joined_at=$_GET['joined_at'];

    $query="update player set full_name='$full_name',email='$email',country='$country',state='$state',
    payment_currency='$payment_currency',mobile_number='$mobile_number',purchase_option_id='$purchase_option_id' where id='$id'";
    $result=mysqli_query($conn,$query);
    $q="select * from player";
    $r=mysqli_query($conn,$q);
    while($row=mysqli_fetch_row($r)){
      echo $row[0]." ";
      echo $row[1]." ";
      echo $row[2]." ";
      echo $row[3]." ";
      echo $row[4]." ";
      echo $row[5]." ";
      echo $row[6]." ";
      echo $row[7]." ";
      echo $row[8]." ";
      echo "<br>";
    }
  }
     ?>
  </body>
</html>
