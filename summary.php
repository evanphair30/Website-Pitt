<?php
include 'connect.php';
session_start();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Order Summary</title>
</head>
<body>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product</th>
        <th scope="col">Quantity</th>
	<th scope="col">Total</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Card Number</th>
        <th scope="col">CVV</th>
      </tr>
    </thead>

<?php
$sql = "SELECT * FROM checking;";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<tbody>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['idcheck'] . "</td>";
				echo "<td>" . $row['product'] . "</td>";
		        echo "<td>" . $row['quantity'] . "</td>";
		        echo "<td>" . $row['total'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['cardnumber'] . "</td>";
		        echo "<td>" . $row['cvv'] . "</td>";
            echo "</tr>";
    }
        echo "</tbody>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
    
  </table>

</body>
</html>