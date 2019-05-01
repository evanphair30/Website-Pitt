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
	$jerseys = $_POST['jersey'];
	$opponents = $_POST['opponent'];
    $locations = $_POST['location'];
	$dates = $_POST['date'];
    $times = $_POST['time'];
	$results = $_POST['result'];

    $sql = "INSERT INTO roster (idroster, firstname, lastname, position, year, hometown)  VALUES ('$jerseys', '$opponents', '$locations', '$dates', '$times', '$results')";

    $result = mysqli_query($con,$sql);
}
mysqli_close($con);

?>

<form action="addplayer.php" method="post">
Number: <input type="text" name="jersey"><br><br>
First Name: <input type="text" name="opponent"><br><br>
Last Name: <input type="text" name="location"><br><br>
Position: <input type="text" name="date"><br><br>
Year: <input type="text" name="time"><br><br>
Hometown: <input type="text" name="result"><br><br>
<br>
<input type="submit" name="submit" value="Submit Player"/>

</form>

<a href="roster.php">Return To roster</a>

</body>

</html>