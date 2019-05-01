<?php
include 'connect.php';
session_start();
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="result.css">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed|Patua+One|Roboto|Source+Sans+Pro|Varela+Round" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
	<title>Hurling</title>
	<link rel="shortcut icon" type="image/png" href="Final Project/image/maxresdefault.jpg"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

<center><h3>Roster</h3></center>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#Stats</th>
        <th scope="col">Halfs</th>
        <th scope="col">Goals</th>
        <th scope="col">Assists</th>
        <th scope="col">Points</th>
        <th scope="col">Roster Number</th>
      </tr>
    </thead>
<?php
//select query execution
$sql = "SELECT * FROM stats;";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<tbody>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
		echo "<td>" . $row['idschedule'] . "</td>";
                echo "<td>" . $row['halfs'] . "</td>";
                echo "<td>" . $row['goals'] . "</td>";
                echo "<td>" . $row['assists'] . "</td>";
		echo "<td>" . $row['points'] . "</td>";
		echo "<td>" . $row['idroster'] . "</td>";
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
