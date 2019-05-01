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

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Games Played</th>
	<th scope="col">Goals</th>
	<th scope="col">Assists</th>
        <th scope="col">Points</th>
      </tr>
    </thead>
    <?php
      function echoStatRow($games_played, $goals, $assists, $points) {
        echo "<tr>";
        echo "<td>$games_played</td>";
        echo "<td>$goals</td>";
        echo "<td>$assists</td>";
        echo "<td>$points</td>";
        echo "</tr>";
      }

      $sql = "SELECT count(idschedule), sum(goals), sum(assists), sum(points) FROM stats WHERE idroster = " . $_GET['id'];
      if ($result = mysqli_query($con, $sql)) {

        while ($row = mysqli_fetch_row($result)) {
          echoStatRow($row[0], $row[1], $row[2], $row[3]);
        }
        mysqli_free_result($result);
     }
   ?>
  </table>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
