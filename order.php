<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Order Summary</title>
</head>
<body>

<?php
$link = mysqli_connect("localhost","emp108","4238780","emp108");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//select query execution
$sql = "select * from orderlist order by id DESC;";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
echo"Table 1 :Ordering by last order placed first";
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
                echo "<th>address</th>";
                echo "<th>phone</th>";
		echo "<th>quantity</th>";
		echo "<th>delivery</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
		echo "<td>" . $row['quantity'] . "</td>";
		echo "<td>" . $row['delivery'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$sqll = "select * from orderlist order by id ASC;";
if($result = mysqli_query($link, $sqll)){
    if(mysqli_num_rows($result) > 0){
echo "Table 2 :First order placed first";
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
                echo "<th>address</th>";
                echo "<th>phone</th>";
		echo "<th>quantity</th>";
		echo "<th>delivery</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
		echo "<td>" . $row['quantity'] . "</td>";
		echo "<td>" . $row['delivery'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$sqlll = "select * from orderlist order by quantity DESC;";
if($result = mysqli_query($link, $sqlll)){
    if(mysqli_num_rows($result) > 0){
echo "Table 3:Highest quantity ordered by customer first.";
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
                echo "<th>address</th>";
                echo "<th>phone</th>";
		echo "<th>quantity</th>";
		echo "<th>delivery</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
		echo "<td>" . $row['quantity'] . "</td>";
		echo "<td>" . $row['delivery'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>

</body>
</html>