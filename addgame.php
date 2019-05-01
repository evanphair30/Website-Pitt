<?php
include 'connect.php';
session_start();
?>


<html>
<head>
	<meta charset="utf-8">
	<title>createtopics</title>
</head>

<body>

<?php

if(isset($_POST['submit']))
{
	$opponents = $_POST['opponent'];
    $locations = $_POST['location'];
	$dates = $_POST['date'];
    $times = $_POST['time'];
	$results = $_POST['result'];
    $scores = $_POST['score'];

    $sql = "INSERT INTO schedule (team, location, date, time, result, score)  VALUES ('$opponents', '$locations', '$dates', '$times', '$results', '$scores')";

    $result = mysqli_query($con,$sql);
}
mysqli_close($con);

?>

<form action="addgame.php" method="post">
Opponent: <input type="text" name="opponent"><br><br>
Location: <input type="text" name="location"><br><br>
Date: <input type="text" name="date"><br><br>
Time: <input type="text" name="time"><br><br>
Result: <input type="text" name="result"><br><br>
Score: <input type="text" name="score"><br><br>
<br>
<input type="submit" name="submit" value="Submit Game"/>

</form>

<a href="schedule.php">Return To Schedule</a>

</body>

</html>