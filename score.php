<?php
include 'connect.php';
session_start();
?>


<html>
<head>
	<meta charset="utf-8">
	<title>results</title>
</head>

<body>

<?php

if(isset($_POST['submit']))
{
	$result = $_POST['result'];
	$score = $_POST['score'];
    $ids = $_POST['idschedule'];

    $sql = "INSERT INTO schedule (result, score)  VALUES ('$result', '$score')";

    $result = mysqli_query($con,$sql);
}
mysqli_close($con);

?>

<form action="scores.php" method="post">
<input type="hidden" name="idschedule" value=<?php echo $_GET['id']; ?> />
Result: <br><input type="text" name="result">
<br>
Score: <br><textarea rows="4" cols="50" name="score"></textarea>
<br>
<input type="submit" name="submit" value="Submit The Results"/>

</form>
</body>

</html>