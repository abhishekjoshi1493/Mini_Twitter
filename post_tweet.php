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
$date_of_post=date("Y/m/d", time());
$time_of_post=date(" H:i:s", time());
$res1 = mysqli_query($con,"INSERT INTO POSTS(UNAME,CONTENT,POST_DATE,POST_TIME) VALUES('$_SESSION[username]','$_POST[tweet_text]','$date_of_post','$time_of_post')");
header('Location: profile_page.php');
exit();
?>
