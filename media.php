<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="red.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed|Patua+One|Roboto|Source+Sans+Pro|Varela+Round" rel="stylesheet">
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
<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">Games Media</h5>
  </div>
</div>



<div class="d-flex justify-content-between">
      <div>
         <video width="50%" controls id="myvideo">
  <source src="image/NCGAA.mp4" type="video/mp4">
  <source src="image/NCGAA.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
<br>
<button onclick="openFullscreen();">Open Video in Fullscreen Mode</button>
<p><strong>Tip:</strong> Press the "Esc" key to exit full screen.</p>

<script>
var elem = document.getElementById("myvideo");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }
}
</script>

      </div>
      <div>
         <p>2019 Championship Game</p>
      </div>
 </div>


</div>
<hr/>


<div class="d-flex justify-content-between">
      <div>
         <div id="fb-root">
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=1909157015962741&autoLogAppEvents=1"></script>

<div class="fb-video" data-href="https://www.facebook.com/PurdueHurling/videos/186286188596124/" 
data-width="500" data-show-text="false">
<blockquote cite="https://developers.facebook.com/PurdueHurling/videos/186286188596124/" 
class="fb-xfbml-parse-ignore"><a href="https://developers.facebook.com/PurdueHurling/videos/186286188596124/">Purdue V. PITT - Midwest Finals 2017</a><p>LIVE STREAM OF THE NCGAA MIDWEST FINALS!</p>
Posted by <a href="https://www.facebook.com/PurdueHurling/">Purdue Hurling Club</a> on Saturday, November 11, 2017</blockquote></div>
</div>

      </div>
      <div>
         <p>Mid-West Tournament</p>
      </div>




</div>
<br><br>

<footer>
<div class="info">
	<nav>
		<a href="">Contact Us</a> |
		<a href="">Status</a> |
		<a href="">Alumni</a>
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