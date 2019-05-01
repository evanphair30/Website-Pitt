<?php
include 'connect.php';
session_start();
?>


<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="red.css">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed|Patua+One|Roboto|Source+Sans+Pro|Varela+Round" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
	<title>Hurling</title>
	<link rel="shortcut icon" type="image/png" href="image/maxresdefault.jpg"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
      div { display:inline-block; }
   </style>
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
<br>

<?php

if(isset($_POST['submit']))
{
$firstname = $_POST['firstname']; 
$lastname = $_POST['lastname']; 
$phone = $_POST['phone']; 
$email = $_POST['email'];
$address = $_POST['address']; 
$state = $_POST['state']; 
$zip = $_POST['zip'];
$know = $_POST['know']; 
$info = $_POST['comment'];

    $sql = "INSERT INTO recruit (firstname, lastname, phone, email, address, state, zip, know, info)  VALUES ('$firstname', '$lastname', '$phone', '$email', '$address', '$state', '$zip', '$know', '$info')";

    $result = mysqli_query($con,$sql);
}
mysqli_close($con);

?>
<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">Recruitment</h5>
  </div>
</div>
<br>

<form action="recruit.php" method="post">

<div>
  First name:
  <input type="text"  name="firstname">  
Last name:
  <input type="text" name="lastname"><br><br>

  Phone Number
  <input type="text" name="phone">
 
 Email
  <input type="text" name="email">

</div>
<br>
<br>
<div>
   Address
  <input type="text" name="address">
 
 State/Province
  <input type="text" name="state"><br><br>

  Zip/Postal Code
  <input type="text" name="zip">
</div>

<br><br>
  What Do You Know About Hurling<br>
  <input type="text" name="know"><br>
  Additional Info<br>
  <textarea rows="4" cols="50" name="comment">
Enter text here...</textarea><br>
  <br>
  <input type="submit" name="submit" value="Submit Your Topic"/>
</form>

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


</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>