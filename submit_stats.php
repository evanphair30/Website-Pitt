<?php
 include 'connect.php'; 
 session_start(); 
?>
<html>
 <head>
  <title>Submission Successful</title>
 </head>
 <body>
  <h2>Success! The boxscore was submitted to the database.</h2>
  <a href="http://studentprojects.sis.pitt.edu/spring2019/emp108/schedule.php">Return to the schedule</a>
 <?php 
  function addRowToDB($rowid, $con) {
    $halfs = $_POST['half'][$rowid];
    $num = $_POST['num'][$rowid];
    $goals = $_POST['goals'][$rowid];
    $assists = $_POST['assists'][$rowid];
    $points = $_POST['point'][$rowid];
    $ids = $_POST['catid'];
    $sql = "INSERT INTO stats (halfs, goals, assists, points, idschedule, idroster)  VALUES ('$halfs', '$goals', '$assists', '$points', '$ids', '$num')";
    if(!mysqli_query($con, $sql)) { 
      print "<p>Uh-oh. Could not enter row $rowid</p>";
    }
  }

  if(isset($_POST['submit'])) { 
    for($i = 0; $i < 10; $i++) {
       addRowToDB($i, $con);
    }
  }
  mysqli_close($con);
  ?>
 </body>
</html>
