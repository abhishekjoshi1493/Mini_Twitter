<?php
	session_start();
$host = "localhost";
$username = "root";
$password = "";
$dbname = "Twitter";
// Create connection to the database.
$con=mysqli_connect($host,$username,$password,$dbname);
// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result = mysqli_query($con,"SELECT * FROM POSTS WHERE UNAME='$_SESSION[username]' OR UNAME IN (SELECT FOLLOWING FROM USER_FOLLOW WHERE FOLLOWER='$_SESSION[username]') ORDER BY POST_DATE DESC,POST_TIME DESC");
  while($row=mysqli_fetch_array($result))
  {
	echo $row['UNAME'];
	echo "<br/>";
	echo $row['CONTENT'];
	echo "<br/>";
	echo $row['POST_DATE'];
	echo "<br/>";
	echo $row['POST_TIME'];
	echo "<hr/>";
  }
  ?>
