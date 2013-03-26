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
$result = mysqli_query($con,"SELECT P.FNAME AS fname,U_F.FOLLOWING AS following FROM USER_FOLLOW AS U_F,PROFILE AS P WHERE U_F.FOLLOWING=P.UNAME && U_F.FOLLOWER='$_GET[username]'");
while($row = mysqli_fetch_array($result))
  {
	echo $row['fname'];
	echo " @ ";
	echo $row['following'];
	$userid=$row['following'];
	$href_link="profile.php?username="."$userid";
	$anchor="<a href=".$href_link.">".$row['following']."</a>";
	echo $anchor;
  }
?>
