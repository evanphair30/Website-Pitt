<?php
include 'connect.php';
session_start();
?>


<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="player.css">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed|Patua+One|Roboto|Source+Sans+Pro|Varela+Round" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
	<title>Hurling</title>
	<link rel="shortcut icon" type="image/png" href="Final Project/image/maxresdefault.jpg"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
<header>	
	<img src="image/maxresdefault.jpg" alt="Home"style="width:190px;height:120px;">
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="Home.html">Pitt Hurling</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Home.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="schedule.php">Schedule</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Roster
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="roster.php">Players</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="recruit.php">Recruitment</a>
          <a class="dropdown-item" href="print.php">Coaches Only Info</a>
        </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="events.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Events
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="poll.php">Polling</a>
	  <a class="dropdown-item" href="media.php">Media</a>
        </div>
		<li class="nav-item">
        <a class="nav-link" href="cart.php">Cart</a>
      </li>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</header>

<center><h3>Roster</h3></center>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Position</th>
        <th scope="col">Year</th>
        <th scope="col">Hometown</th>
        <th scope="col">Stats</th>
      </tr>
    </thead>
<?php
//select query execution
$sql = "SELECT * FROM roster;";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<tbody>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
		echo "<td>" . $row['idroster'] . "</td>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['lastname'] . "</td>";
                echo "<td>" . $row['position'] . "</td>";
		echo "<td>" . $row['year'] . "</td>";
		echo "<td>" . $row['hometown'] . "</td>";
		echo "<td>" .'<a href="showstats.php?id=' . $row['idroster'] . '"><input type="submit" value="Stats"/></a>'."</td>" ;
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
</div>
<br>
<?php
echo '<center><a href="addplayer.php?id='.$_GET['id'].'"><input type="submit" value="Add player"/></a></center>';
?>
<br>
<footer>
<div class="info">
	<nav>
		<a href="">Contact Us</a> |
		<a href="">Goon City Perks</a> |
		<a href="">Careers</a>
	</nav>
</div>

<div class="follow">	
	<p>Follow Us On Social Media Today!</p>
</div>

</footer>

</footer>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>

