<?php
  include("connect.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="player.css">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed|Patua+One|Roboto|Source+Sans+Pro|Varela+Round" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
	<title>Hurling</title>
	<link rel="shortcut icon" type="image/png" href="image/maxresdefault.jpg"/>
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

<center><h3>Boxscore</h3></center>
      <?php
        function echoSubmit() {
          echo '<center><input type="submit" name="submit" value="Submit Stats"/></center>';
        }

         function echoHeader() {
           echo '<thead>';
           echo '<tr>';
           echo '<th scope="col">Half</th>';
           echo '<th scope="col">Number</th>';
           echo '<th scope="col">Goals</th>';
           echo '<th scope="col">Assists</th>';
           echo '<th scope="col">Points</th>';
           echo '</tr>';
           echo '</thead>';
         }

         function echoRow($rowid) {
	   echo "<tr>";
           echo '<input type="hidden" name="catid" value=' . $_GET[id] . '/>';
	   echo '<td><input type="text" name="half[]"></td>';
	   echo '<td><input type="text" name="num[]"></td>';
	   echo '<td><input type="text" name="goals[]"></td>';
	   echo '<td><input type="text" name="assists[]"></td>';
	   echo '<td><input type="text" name="point[]"></td>';
	   echo "</tr>";
         }

         function echoRows() {
           $i = 0;
           while( $i < 10) {
             echoRow($i);
              $i++;
           }
         }

         function echoTable() {
           echo '<div class="table-responsive">';
           echo '<table class="table">';
           echo '<tbody>';
           echoHeader();
           echoRows();
           echo '</tbody>';
           echo '</table>';
           echo '</div>';
         }

         function echoForm() {
           echo '<form action="submit_stats.php" method="post">';
           echoTable();
           echoSubmit();
           echo '</form>';
         }
         echoForm();
         
      ?>

<br><br>

<footer>


<div class="info">
	<nav>
<a href="http://usgaa.org/">Contact Us</a> |
		<a href="https://www.alumni.pitt.edu/alumni/resources/alumni-resources/">Alumni</a>
	</nav>
</div>

<div class="follow">	
	<p>Follow Us On Social Media Today!</p>
</div>

</footer>


</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
