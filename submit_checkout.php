<?php
 include 'connect.php'; 
 session_start(); 
?>
<html>
 <head>
  <title>Submission Successful</title>
 </head>
 <body>
  <h2>Thank you for your order!</h2>
  <p>Expect your shipment in 2 days</p>
  <a href="http://studentprojects.sis.pitt.edu/spring2019/emp108/cart.php">Place another order</a>
 <?php 
  if(isset($_POST['submit'])) { 
    $name  = $_POST['name'];
    $number  = $_POST['number'];
    $cvv  = $_POST['cvv'];
    $email = $_POST['email'];
    for($i = 0; $i < count($_POST['item_name']); $i++) {
      $item_name = $_POST['item_name'][$i];
      $item_quantity = $_POST['item_quantity'][$i];
      $item_price  = $_POST['item_price'][$i];
      $total = $item_price * $item_quantity;
      $sql = "INSERT INTO checking (name, email, cardnumber, cvv, product, quantity, total)" . 
             "VALUES ('$name', '$email', '$number', '$cvv', '$item_name', '$item_quantity', '$total')";
      if(!mysqli_query($con, $sql)) { 
        print "<p>Uh-oh. Could not enter row $rowid</p>";
      }
    }
  }
  mysqli_close($con);
  ?>
 </body>
</html>
